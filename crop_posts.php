<?php
$sample = imagecreatefrompng('assets/img/grid_sample2.png');

if (!file_exists('assets/img/posts')) {
    mkdir('assets/img/posts', 0777, true);
}

// Check dimensions
$w = imagesx($sample);
$h = imagesy($sample);

// Top line of the grid in grid_sample2.png is around y=21
$top_y = 21;
$row_h = 187;
$col_w = 150;

$posts = [
    'design' => ['x' => 0, 'y' => $top_y, 'w' => $col_w, 'h' => $row_h],
    'build' => ['x' => 151, 'y' => $top_y, 'w' => $col_w, 'h' => $row_h],
    'deliver' => ['x' => 303, 'y' => $top_y, 'w' => $col_w, 'h' => $row_h],
    
    'behind_the_design' => ['x' => 0, 'y' => $top_y + $row_h + 2, 'w' => $col_w, 'h' => $row_h],
    'site_inspection' => ['x' => 151, 'y' => $top_y + $row_h + 2, 'w' => $col_w, 'h' => $row_h],
    'room_to_unwind' => ['x' => 303, 'y' => $top_y + $row_h + 2, 'w' => $col_w, 'h' => $row_h],
    
    'design_notes' => ['x' => 0, 'y' => $top_y + ($row_h + 2) * 2, 'w' => $col_w, 'h' => $row_h],
    'its_a_feeling' => ['x' => 151, 'y' => $top_y + ($row_h + 2) * 2, 'w' => $col_w, 'h' => $row_h],
    'within_walls' => ['x' => 303, 'y' => $top_y + ($row_h + 2) * 2, 'w' => $col_w, 'h' => $row_h],
];

foreach ($posts as $key => $rect) {
    $cropped = imagecrop($sample, ['x' => $rect['x'], 'y' => $rect['y'], 'width' => $rect['w'], 'height' => $rect['h']]);
    if ($cropped) {
        imagepng($cropped, "assets/img/posts/{$key}.png");
        imagedestroy($cropped);
        echo "Cropped {$key}\n";
    }
}

// Also crop the clean logo square from logo_raw.png
$logo_raw = imagecreatefrompng('assets/img/logo_raw.png');
// In logo_raw.png (86x86), the square is in the center
$logo_square = imagecrop($logo_raw, ['x' => 12, 'y' => 12, 'width' => 62, 'height' => 62]);
if ($logo_square) {
    imagepng($logo_square, "assets/img/logo_square.png");
    imagedestroy($logo_square);
    echo "Cropped logo_square\n";
}
imagedestroy($logo_raw);
imagedestroy($sample);
