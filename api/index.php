<?php
/**
 * CHAUDHARY ASSOCIATES — APPLICATION CONTROLLER & ROUTER
 * Architecture • Interior Design • Turnkey Build
 * 
 * Powered by PHP 8.3 & BladeOne Template Engine
 * Compatible with Vercel Serverless Functions & Local PHP / XAMPP
 */

$baseDir = dirname(__DIR__);

// 1. Autoload Dependencies
require_once $baseDir . '/vendor/autoload.php';

use eftec\bladeone\BladeOne;

// 2. Environment & Writable Cache Directory
// On Vercel / AWS Lambda serverless functions, the root filesystem is read-only.
// We route cache to sys_get_temp_dir() (/tmp) to ensure smooth compilation.
$isVercel = getenv('VERCEL') || isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']);
$cacheDir = $baseDir . '/cache';

if ($isVercel || !is_dir($cacheDir) || !is_writable($cacheDir)) {
    $cacheDir = sys_get_temp_dir() . '/ca_blade_cache';
    if (!is_dir($cacheDir)) {
        @mkdir($cacheDir, 0777, true);
    }
}

$viewsDir = $baseDir . '/views';

// Initialize BladeOne Template Engine
$blade = new BladeOne($viewsDir, $cacheDir, BladeOne::MODE_AUTO);

// 3. Load Project & Services Data Repositories
$allProjects = require $baseDir . '/data/projects.php';
$allServices = require $baseDir . '/data/services.php';

// 4. Inquiries Persistence (Database or Safe Temp JSON Storage)
$inquiriesFile = $baseDir . '/inquiries.json';
if ($isVercel || (!file_exists($inquiriesFile) && !@touch($inquiriesFile)) || !is_writable($inquiriesFile)) {
    $inquiriesFile = sys_get_temp_dir() . '/ca_inquiries.json';
}

// Helper: Get Inquiries List
function getStoredInquiries($inquiriesFile) {
    if (file_exists($inquiriesFile)) {
        $data = @json_decode(file_get_contents($inquiriesFile), true);
        return is_array($data) ? $data : [];
    }
    return [];
}

// Helper: Save Inquiry (JSON fallback + Optional Database PDO support)
function saveInquiry($inquiry, $inquiriesFile) {
    // Check if Postgres / MySQL environment variable is present (e.g. Vercel Postgres / Supabase / Neon)
    $dbUrl = getenv('DATABASE_URL') ?: getenv('POSTGRES_URL') ?: getenv('MYSQL_URL');
    if ($dbUrl) {
        try {
            $parsed = parse_url($dbUrl);
            $driver = ($parsed['scheme'] === 'postgres' || $parsed['scheme'] === 'postgresql') ? 'pgsql' : 'mysql';
            $host = $parsed['host'] ?? 'localhost';
            $port = $parsed['port'] ?? ($driver === 'pgsql' ? 5432 : 3306);
            $dbName = ltrim($parsed['path'] ?? '', '/');
            $user = $parsed['user'] ?? '';
            $pass = $parsed['pass'] ?? '';

            $pdo = new PDO("$driver:host=$host;port=$port;dbname=$dbName", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_TIMEOUT => 3
            ]);

            $pdo->exec("CREATE TABLE IF NOT EXISTS inquiries (
                id VARCHAR(64) PRIMARY KEY,
                timestamp VARCHAR(32),
                name VARCHAR(255),
                phone VARCHAR(64),
                email VARCHAR(255),
                project_type VARCHAR(128),
                area VARCHAR(64),
                location VARCHAR(128),
                notes TEXT,
                status VARCHAR(64)
            )");

            $stmt = $pdo->prepare("INSERT INTO inquiries (id, timestamp, name, phone, email, project_type, area, location, notes, status)
                                   VALUES (:id, :timestamp, :name, :phone, :email, :project_type, :area, :location, :notes, :status)");
            $stmt->execute($inquiry);
            return true;
        } catch (Exception $e) {
            error_log('Database inquiry persistence error: ' . $e->getMessage());
            // Falls through to JSON fallback
        }
    }

    // Fallback to local / tmp JSON file
    $existing = getStoredInquiries($inquiriesFile);
    array_unshift($existing, $inquiry);
    @file_put_contents($inquiriesFile, json_encode($existing, JSON_PRETTY_PRINT));
    return true;
}

// 5. Handle AJAX Contact / Consultation Submission
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' && (isset($_POST['action']) && $_POST['action'] === 'submit_inquiry' || isset($_POST['name']))) {
    header('Content-Type: application/json');
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $projectType = trim($_POST['project_type'] ?? '');
    $area = trim($_POST['area'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $notes = trim($_POST['notes'] ?? '');

    if (empty($name) || empty($phone)) {
        echo json_encode(['success' => false, 'message' => 'Please provide your name and phone number.']);
        exit;
    }

    $inquiry = [
        'id' => uniqid('ca_inq_'),
        'timestamp' => date('Y-m-d H:i:s'),
        'name' => htmlspecialchars($name),
        'phone' => htmlspecialchars($phone),
        'email' => htmlspecialchars($email),
        'project_type' => htmlspecialchars($projectType),
        'area' => htmlspecialchars($area),
        'location' => htmlspecialchars($location),
        'notes' => htmlspecialchars($notes),
        'status' => 'New Lead'
    ];

    saveInquiry($inquiry, $inquiriesFile);

    echo json_encode(['success' => true, 'message' => 'Consultation request received! Our principal architects will contact you within 24 hours.']);
    exit;
}

// 6. Router — supports query param ?page=xxx or friendly path /xxx
$page = $_GET['page'] ?? null;
if (!$page) {
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $segment = basename($requestPath);
    if ($segment === '' || $segment === 'index.php' || $segment === 'api' || strtolower($segment) === 'chadhuary accociates') {
        $page = 'home';
    } else {
        $page = $segment;
    }
}

// 7. Global Data Passed to All Views
$siteData = [
    'brandName' => 'Chaudhary Associates',
    'tagline' => 'Design • Build • Deliver',
    'instagramHandle' => '@designbychaudharyassociates_',
    'instagramUrl' => 'https://www.instagram.com/designbychaudharyassociates_/',
    'partners' => [
        [
            'name' => 'Sumaira',
            'role' => 'Principal Architect & Design Lead',
            'handle' => '@sumaira0024',
            'bio' => 'Spearheads architectural concept design, spatial choreography, daylight optimization, and master planning.',
            'image' => 'assets/img/curated/partner_sumaira.jpg'
        ],
        [
            'name' => 'Anji Siddiqui',
            'role' => 'Partner & Build Director',
            'handle' => '@anjisiddiqui',
            'bio' => 'Directs turnkey project execution, structural engineering integrity, material procurement, and strict timeline adherence.',
            'image' => 'assets/img/curated/partner_anji.jpg'
        ],
    ],
    'phone' => '+91 98765 43210',
    'email' => 'design@chaudharyassociates.com',
    'locations' => 'Delhi NCR • Gurugram • Noida • Pan-India',
    'activePage' => $page,
    'projects' => $allProjects,
    'services' => $allServices,
];

// 8. Render View
try {
    switch ($page) {
        case 'portfolio':
            echo $blade->run('pages.portfolio', $siteData);
            break;
        case 'services':
            echo $blade->run('pages.services', $siteData);
            break;
        case 'process':
            echo $blade->run('pages.process', $siteData);
            break;
        case 'within-walls':
            echo $blade->run('pages.within_walls', $siteData);
            break;
        case 'about':
            echo $blade->run('pages.about', $siteData);
            break;
        case 'calculator':
            echo $blade->run('pages.calculator', $siteData);
            break;
        case 'contact':
            echo $blade->run('pages.contact', $siteData);
            break;
        case 'admin-inquiries':
            $siteData['inquiries'] = getStoredInquiries($inquiriesFile);
            echo $blade->run('pages.admin_inquiries', $siteData);
            break;
        case 'home':
        default:
            echo $blade->run('pages.home', $siteData);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo '<div style="font-family: sans-serif; padding: 2rem; background: #fee; color: #900;">';
    echo '<h2>Blade Template Compilation Error</h2>';
    echo '<p>' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}
