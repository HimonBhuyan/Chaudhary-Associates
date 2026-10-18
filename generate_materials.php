<?php
/**
 * GENERATE HIGH RESOLUTION TACTILE MATERIAL TEXTURES (800x800 px)
 * For Chaudhary Associates "Within Walls" Sensory Material Flatlay Board
 */

$dir = __DIR__ . '/assets/img/materials';
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// 1. Bookmatched Italian Calacatta Marble (800x800)
$img = imagecreatetruecolor(800, 800);
$baseWhite = imagecolorallocate($img, 246, 245, 242);
imagefilledrectangle($img, 0, 0, 800, 800, $baseWhite);

// Add marble veins (grey and subtle gold)
$veinGrey1 = imagecolorallocatealpha($img, 150, 155, 160, 85);
$veinGrey2 = imagecolorallocatealpha($img, 110, 115, 120, 75);
$veinGold  = imagecolorallocatealpha($img, 197, 168, 128, 80);

for ($i = 0; $i < 6; $i++) {
    $x = rand(50, 750);
    $y = 0;
    while ($y < 800) {
        $nx = $x + rand(-3, 3) + sin($y / 30) * 15;
        $ny = $y + rand(2, 6);
        imagesetthickness($img, rand(1, 4));
        imageline($img, (int)$x, (int)$y, (int)$nx, (int)$ny, ($i % 2 == 0) ? $veinGrey1 : $veinGold);
        if (rand(0, 5) == 0) {
            imagesetthickness($img, 1);
            imageline($img, (int)$nx, (int)$ny, (int)$nx + rand(-40, 40), (int)$ny + rand(-20, 20), $veinGrey2);
        }
        $x = $nx;
        $y = $ny;
    }
}
imagejpeg($img, "$dir/calacatta_marble.jpg", 95);
imagedestroy($img);

// 2. Brushed Champagne Brass (800x800)
$img = imagecreatetruecolor(800, 800);
for ($y = 0; $y < 800; $y++) {
    // Subtle vertical gradient
    $r = (int)(205 + 20 * sin($y / 150));
    $g = (int)(175 + 18 * sin($y / 150));
    $b = (int)(135 + 15 * sin($y / 150));
    $col = imagecolorallocate($img, max(0, min(255, $r)), max(0, min(255, $g)), max(0, min(255, $b)));
    imageline($img, 0, $y, 800, $y, $col);
}
// Add fine brushed metallic grain horizontally
for ($i = 0; $i < 20000; $i++) {
    $y = rand(0, 800);
    $len = rand(100, 600);
    $x = rand(0, 800 - $len);
    $lum = rand(-15, 15);
    $alpha = rand(60, 95);
    $grain = imagecolorallocatealpha($img, max(0, min(255, 200 + $lum)), max(0, min(255, 175 + $lum)), max(0, min(255, 130 + $lum)), $alpha);
    imagesetthickness($img, 1);
    imageline($img, $x, $y, $x + $len, $y, $grain);
}
imagejpeg($img, "$dir/champagne_brass.jpg", 95);
imagedestroy($img);

// 3. Fluted Teak Millwork (800x800)
$img = imagecreatetruecolor(800, 800);
$ridgeWidth = 32;
for ($x = 0; $x < 800; $x++) {
    $ridgePhase = ($x % $ridgeWidth) / $ridgeWidth; // 0 to 1
    // Fluted cylindrical curve shading
    $shade = sin($ridgePhase * M_PI); // 0 at edges, 1 at peak
    $r = (int)(90 + 55 * $shade);
    $g = (int)(55 + 35 * $shade);
    $b = (int)(35 + 20 * $shade);
    // Subtle wood grain variation
    $col = imagecolorallocate($img, max(0, min(255, $r)), max(0, min(255, $g)), max(0, min(255, $b)));
    imageline($img, $x, 0, $x, 800, $col);
}
// Add subtle vertical wood fibers
for ($i = 0; $i < 6000; $i++) {
    $x = rand(0, 800);
    $y = rand(0, 700);
    $len = rand(50, 250);
    $fiber = imagecolorallocatealpha($img, rand(60, 110), rand(35, 70), rand(20, 45), rand(75, 95));
    imageline($img, $x, $y, $x + rand(-1, 1), $y + $len, $fiber);
}
imagejpeg($img, "$dir/fluted_teak.jpg", 95);
imagedestroy($img);

// 4. Acoustic Bouclé Fabric (800x800)
$img = imagecreatetruecolor(800, 800);
$ivory = imagecolorallocate($img, 238, 234, 226);
imagefilledrectangle($img, 0, 0, 800, 800, $ivory);

// Tactile looped curly texture
for ($i = 0; $i < 35000; $i++) {
    $x = rand(0, 800);
    $y = rand(0, 800);
    $rad = rand(2, 6);
    $lum = rand(-25, 25);
    $boucle = imagecolorallocatealpha($img, max(0, min(255, 230 + $lum)), max(0, min(255, 226 + $lum)), max(0, min(255, 218 + $lum)), rand(50, 85));
    imagearc($img, $x, $y, $rad, $rad, rand(0, 180), rand(180, 360), $boucle);
}
imagejpeg($img, "$dir/acoustic_boucle.jpg", 95);
imagedestroy($img);

// 5. Belgian Organic Linen (800x800)
$img = imagecreatetruecolor(800, 800);
$linenBase = imagecolorallocate($img, 222, 212, 196);
imagefilledrectangle($img, 0, 0, 800, 800, $linenBase);

// Cross-weave slub fibers
for ($x = 0; $x < 800; $x += 4) {
    $weftCol = imagecolorallocatealpha($img, rand(190, 215), rand(180, 205), rand(165, 190), rand(50, 80));
    imageline($img, $x, 0, $x, 800, $weftCol);
}
for ($y = 0; $y < 800; $y += 4) {
    $warpCol = imagecolorallocatealpha($img, rand(185, 210), rand(175, 200), rand(160, 185), rand(50, 80));
    imageline($img, 0, $y, 800, $y, $warpCol);
}
imagejpeg($img, "$dir/belgian_linen.jpg", 95);
imagedestroy($img);

echo "All 5 tactile materials successfully generated at 800x800 px!\n";
