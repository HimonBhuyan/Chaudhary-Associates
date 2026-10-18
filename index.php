<?php
/**
 * CHAUDHARY ASSOCIATES — APPLICATION CONTROLLER & ROUTER
 * Architecture • Interior Design • Turnkey Build
 * 
 * Powered by PHP 8.3 & BladeOne Template Engine
 */

require_once __DIR__ . '/vendor/autoload.php';

use eftec\bladeone\BladeOne;

// Ensure directories exist
$cacheDir = __DIR__ . '/cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0777, true);
}

$viewsDir = __DIR__ . '/views';

// Initialize BladeOne
$blade = new BladeOne($viewsDir, $cacheDir, BladeOne::MODE_DEBUG);

// Load Data Repositories
$allProjects = require __DIR__ . '/data/projects.php';
$allServices = require __DIR__ . '/data/services.php';

// Handle AJAX Contact / Consultation Submission
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submit_inquiry') {
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

    $logFile = __DIR__ . '/inquiries.json';
    $existing = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
    if (!is_array($existing)) $existing = [];
    array_unshift($existing, $inquiry);
    file_put_contents($logFile, json_encode($existing, JSON_PRETTY_PRINT));

    echo json_encode(['success' => true, 'message' => 'Consultation request received! Our principal architects will contact you within 24 hours.']);
    exit;
}

// Router
$page = $_GET['page'] ?? 'home';

// Global Data Passed to All Views
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
            $logFile = __DIR__ . '/inquiries.json';
            $inquiries = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
            $siteData['inquiries'] = is_array($inquiries) ? $inquiries : [];
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
