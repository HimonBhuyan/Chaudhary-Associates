<?php
$assets = [
    'hero_villa.jpg' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=85',
    'hero_minimal_interior.jpg' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=85',
    'project_penthouse.jpg' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=85',
    'project_living_teal.jpg' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=1200&q=85',
    'project_bedroom_navy.jpg' => 'https://images.unsplash.com/photo-1616594039964-ae9021a400a0?auto=format&fit=crop&w=1200&q=85',
    'project_dining_marble.jpg' => 'https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=1200&q=85',
    'project_blueprint.jpg' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=85',
    'project_construction.jpg' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=85',
    'project_commercial.jpg' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=85',
    'project_facade.jpg' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=85',
    'partner_sumaira.jpg' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=85',
    'partner_anji.jpg' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=800&q=85',
];

if (!file_exists('assets/img/curated')) {
    mkdir('assets/img/curated', 0777, true);
}

foreach ($assets as $filename => $url) {
    $target = "assets/img/curated/{$filename}";
    if (!file_exists($target) || filesize($target) < 1000) {
        echo "Fetching {$filename}...\n";
        $data = @file_get_contents($url);
        if ($data) {
            file_put_contents($target, $data);
            echo "Saved {$filename} (" . round(strlen($data)/1024) . " KB)\n";
        } else {
            echo "Failed to fetch {$filename}\n";
        }
    } else {
        echo "Already exists: {$filename}\n";
    }
}
