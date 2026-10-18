<?php
/**
 * GENERATE HIGH-RESOLUTION (800x1000 px) REPLACEMENTS FOR ALL POSTS
 * No more blurry images!
 */

$fontGeorgia = 'C:/Windows/Fonts/georgia.ttf';
$fontGeorgiaBold = 'C:/Windows/Fonts/georgiab.ttf';
$fontArial = 'C:/Windows/Fonts/arial.ttf';
$fontArialBold = 'C:/Windows/Fonts/arialbd.ttf';

if (!file_exists('assets/img/posts')) {
    mkdir('assets/img/posts', 0777, true);
}

// Helper: load and fit image into WxH
function createResizedImage($sourcePath, $targetW = 800, $targetH = 1000) {
    if (!file_exists($sourcePath)) return imagecreatetruecolor($targetW, $targetH);
    $ext = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));
    $src = ($ext === 'png') ? @imagecreatefrompng($sourcePath) : @imagecreatefromjpeg($sourcePath);
    if (!$src) return imagecreatetruecolor($targetW, $targetH);

    $origW = imagesx($src);
    $origH = imagesy($src);
    $dest = imagecreatetruecolor($targetW, $targetH);

    // Calculate crop for center cover
    $srcRatio = $origW / $origH;
    $destRatio = $targetW / $targetH;

    if ($srcRatio > $destRatio) {
        $tempH = $origH;
        $tempW = (int)($origH * $destRatio);
        $srcX = (int)(($origW - $tempW) / 2);
        $srcY = 0;
    } else {
        $tempW = $origW;
        $tempH = (int)($origW / $destRatio);
        $srcX = 0;
        $srcY = (int)(($origH - $tempH) / 2);
    }

    imagecopyresampled($dest, $src, 0, 0, $srcX, $srcY, $targetW, $targetH, $tempW, $tempH);
    imagedestroy($src);
    return $dest;
}

// Helper: draw pushpin
function drawPushpin($img, $x, $y) {
    $white = imagecolorallocate($img, 255, 255, 255);
    $shadow = imagecolorallocatealpha($img, 0, 0, 0, 80);
    // Pin head
    imagefilledellipse($img, $x + 2, $y + 2, 28, 28, $shadow);
    imagefilledellipse($img, $x, $y, 28, 28, $white);
    // Pin tip angle
    imagefilledpolygon($img, [
        $x - 8, $y + 12,
        $x + 8, $y + 12,
        $x, $y + 36
    ], $white);
}

// Helper: draw reel icon
function drawReelIcon($img, $x, $y) {
    $white = imagecolorallocate($img, 255, 255, 255);
    $bg = imagecolorallocatealpha($img, 0, 0, 0, 60);
    imagefilledrectangle($img, $x - 22, $y - 18, $x + 22, $y + 18, $bg);
    // Triangle play
    imagefilledpolygon($img, [
        $x - 8, $y - 10,
        $x - 8, $y + 10,
        $x + 10, $y
    ], $white);
}

// Helper: draw carousel icon
function drawCarouselIcon($img, $x, $y) {
    $white = imagecolorallocate($img, 255, 255, 255);
    $trans = imagecolorallocatealpha($img, 255, 255, 255, 60);
    // Back square
    imagerectangle($img, $x - 12, $y - 12, $x + 12, $y + 12, $trans);
    // Front square
    imagerectangle($img, $x - 18, $y - 6, $x + 6, $y + 18, $white);
}

// Helper: word wrap TTF text
function drawWrappedText($img, $size, $angle, $x, $y, $color, $font, $text, $maxWidth, $lineHeight) {
    $words = explode(' ', $text);
    $line = '';
    $currentY = $y;

    foreach ($words as $word) {
        $testLine = $line . ($line === '' ? '' : ' ') . $word;
        $box = imagettfbbox($size, $angle, $font, $testLine);
        $testWidth = $box[2] - $box[0];

        if ($testWidth > $maxWidth && $line !== '') {
            imagettftext($img, $size, $angle, $x, $currentY, $color, $font, $line);
            $line = $word;
            $currentY += $lineHeight;
        } else {
            $line = $testLine;
        }
    }
    if ($line !== '') {
        imagettftext($img, $size, $angle, $x, $currentY, $color, $font, $line);
    }
    return $currentY;
}

// =========================================================================
// 1. POST: DESIGN (800x1000)
// =========================================================================
echo "Generating HD Design post...\n";
$img1 = createResizedImage('assets/img/hd_sources/hd_design_base.jpg', 800, 1000);
// Apply dark contrast gradient overlay
$overlay1 = imagecreatetruecolor(800, 1000);
$darkBlue = imagecolorallocatealpha($overlay1, 15, 22, 35, 65);
imagefill($overlay1, 0, 0, $darkBlue);
imagecopy($img1, $overlay1, 0, 0, 0, 0, 800, 1000);
imagedestroy($overlay1);

$white = imagecolorallocate($img1, 255, 255, 255);
$gold = imagecolorallocate($img1, 212, 175, 55);
$lightGray = imagecolorallocate($img1, 230, 235, 240);

// Top handle
imagettftext($img1, 15, 0, 50, 70, $lightGray, $fontArial, "@designbychaudharyassociates_");
drawPushpin($img1, 730, 50);

// Title
imagettftext($img1, 74, 0, 50, 260, $white, $fontGeorgiaBold, "Design");

// Bullets
$designPoints = [
    "Innovative Design",
    "Custom Solutions",
    "Creative Vision",
    "Modern and Functional Spaces",
    "Architectural Excellence",
    "User-Centric Design",
    "Cutting-Edge Technology",
    "Detail Oriented"
];
$startY = 340;
foreach ($designPoints as $pt) {
    imagettftext($img1, 18, 0, 60, $startY, $lightGray, $fontArialBold, "•  " . $pt);
    $startY += 42;
}

// Bottom Paragraph
$desc1 = "Design is where ideas take shape. At Chaudhary Associates, our expert designers and engineers blend creativity with functionality to ensure each project is tailored to meet both your vision and real-world needs. From concept sketches to detailed drawings, we focus on delivering designs that are innovative, sustainable, and future-proof.";
drawWrappedText($img1, 15, 0, 50, 780, $white, $fontGeorgia, $desc1, 700, 26);
imagepng($img1, 'assets/img/posts/design.png');
imagedestroy($img1);

// =========================================================================
// 2. POST: BUILD (800x1000)
// =========================================================================
echo "Generating HD Build post...\n";
$img2 = createResizedImage('assets/img/hd_sources/hd_build_base.jpg', 800, 1000);
$overlay2 = imagecreatetruecolor(800, 1000);
$darkBlue2 = imagecolorallocatealpha($overlay2, 12, 18, 28, 65);
imagefill($overlay2, 0, 0, $darkBlue2);
imagecopy($img2, $overlay2, 0, 0, 0, 0, 800, 1000);
imagedestroy($overlay2);

$white = imagecolorallocate($img2, 255, 255, 255);
$lightGray = imagecolorallocate($img2, 230, 235, 240);

imagettftext($img2, 15, 0, 50, 70, $lightGray, $fontArial, "@designbychaudharyassociates_");
drawPushpin($img2, 730, 50);

imagettftext($img2, 74, 0, 50, 260, $white, $fontGeorgiaBold, "Build");

$buildPoints = [
    "Flawless Execution",
    "Structural Integrity",
    "Skilled Craftsmanship",
    "Quality Assurance & Strict Delivery",
    "Project Management",
    "Seamless Coordination",
    "Innovative & Sustainable Methods",
    "Build with Confidence"
];
$startY = 340;
foreach ($buildPoints as $pt) {
    imagettftext($img2, 18, 0, 60, $startY, $lightGray, $fontArialBold, "•  " . $pt);
    $startY += 42;
}

$desc2 = "BUILD is where the magic happens—where we bring designs to life with unmatched precision. Our core ensures every drawing is executed flawlessly, maintaining the highest standards of quality and safety. We use cutting edge technology and trusted construction methods to bring your project to life, on time and within its budget.";
drawWrappedText($img2, 15, 0, 50, 780, $white, $fontGeorgia, $desc2, 700, 26);
imagepng($img2, 'assets/img/posts/build.png');
imagedestroy($img2);

// =========================================================================
// 3. POST: DELIVER (800x1000)
// =========================================================================
echo "Generating HD Deliver post...\n";
$img3 = createResizedImage('assets/img/hd_sources/hd_deliver_base.jpg', 800, 1000);
$overlay3 = imagecreatetruecolor(800, 1000);
$darkBlue3 = imagecolorallocatealpha($overlay3, 20, 24, 30, 60);
imagefill($overlay3, 0, 0, $darkBlue3);
imagecopy($img3, $overlay3, 0, 0, 0, 0, 800, 1000);
imagedestroy($overlay3);

$white = imagecolorallocate($img3, 255, 255, 255);
$lightGray = imagecolorallocate($img3, 230, 235, 240);

imagettftext($img3, 15, 0, 50, 70, $lightGray, $fontArial, "@designbychaudharyassociates_");
drawPushpin($img3, 730, 50);

imagettftext($img3, 74, 0, 50, 260, $white, $fontGeorgiaBold, "Deliver");

$deliverPoints = [
    "Delivering Excellence",
    "On-Time Delivery",
    "Quality Assurance",
    "Client Satisfaction & Final Inspection",
    "Turnkey & Timely Completion",
    "Project Handover",
    "Successful Delivery"
];
$startY = 340;
foreach ($deliverPoints as $pt) {
    imagettftext($img3, 18, 0, 60, $startY, $lightGray, $fontArialBold, "•  " . $pt);
    $startY += 42;
}

$desc3 = "We make it real. Our commitment doesn't stop at construction—it's about ensuring that every detail meets your expectations. On time, on budget, and with lasting quality. We're dedicated to delivering spaces that provide value for years to come. From final inspection to handing over the keys, we guarantee that what we've built meets the highest standards, ready for immediate use.";
drawWrappedText($img3, 15, 0, 50, 780, $white, $fontGeorgia, $desc3, 700, 26);
imagepng($img3, 'assets/img/posts/deliver.png');
imagedestroy($img3);

// =========================================================================
// 4. POST: BEHIND THE DESIGN (800x1000)
// =========================================================================
echo "Generating HD Behind The Design post...\n";
$img4 = createResizedImage('assets/img/hd_sources/hd_behind_design_base.jpg', 800, 1000);
drawReelIcon($img4, 740, 50);

// Subtitle Box
$boxBg = imagecolorallocatealpha($img4, 0, 0, 0, 80);
imagefilledrectangle($img4, 50, 480, 560, 660, $boxBg);
$white = imagecolorallocate($img4, 255, 255, 255);
$yellow = imagecolorallocate($img4, 245, 190, 40);

imagettftext($img4, 42, 0, 70, 550, $white, $fontArialBold, "Behind");
imagettftext($img4, 38, 0, 70, 610, $yellow, $fontGeorgiaBold, "[the]");
imagettftext($img4, 42, 0, 200, 610, $white, $fontArialBold, "Design");
imagepng($img4, 'assets/img/posts/behind_the_design.png');
imagedestroy($img4);

// =========================================================================
// 5. POST: SITE INSPECTION (800x1000)
// =========================================================================
echo "Generating HD Site Inspection post...\n";
$img5 = createResizedImage('assets/img/curated/project_construction.jpg', 800, 1000);
drawReelIcon($img5, 740, 50);
$boxBg5 = imagecolorallocatealpha($img5, 15, 20, 25, 70);
imagefilledrectangle($img5, 0, 840, 800, 1000, $boxBg5);
$white = imagecolorallocate($img5, 255, 255, 255);
$gold = imagecolorallocate($img5, 212, 175, 55);
imagettftext($img5, 26, 0, 50, 900, $gold, $fontGeorgiaBold, "Active Site Coordination");
imagettftext($img5, 18, 0, 50, 940, $white, $fontArial, "Engineering Review & Blueprint Alignment • Chaudhary Associates");
imagepng($img5, 'assets/img/posts/site_inspection.png');
imagedestroy($img5);

// =========================================================================
// 6. POST: A ROOM TO UNWIND (800x1000)
// =========================================================================
echo "Generating HD Room to Unwind post...\n";
$img6 = createResizedImage('assets/img/hd_sources/teal_sofa_moulding.jpg', 800, 1000);
drawCarouselIcon($img6, 740, 50);
// Top header band
$topBand = imagecolorallocatealpha($img6, 248, 246, 240, 10);
imagefilledrectangle($img6, 0, 0, 800, 140, $topBand);
$charcoal = imagecolorallocate($img6, 35, 40, 45);
imagettftext($img6, 36, 0, 240, 85, $charcoal, $fontGeorgia, "A room to unwind");
imagepng($img6, 'assets/img/posts/room_to_unwind.png');
imagedestroy($img6);

// =========================================================================
// 7. POST: DESIGN NOTES (800x1000)
// =========================================================================
echo "Generating HD Design Notes post...\n";
$img7 = createResizedImage('assets/img/hd_sources/marble_coffee_table.jpg', 800, 1000);
drawCarouselIcon($img7, 740, 50);
$white = imagecolorallocate($img7, 255, 255, 255);
$darkShadow = imagecolorallocatealpha($img7, 0, 0, 0, 60);
imagefilledrectangle($img7, 340, 800, 760, 920, $darkShadow);
imagettftext($img7, 22, 0, 360, 850, $white, $fontArialBold, "DESIGN NOTES");
imagettftext($img7, 18, 0, 360, 885, $white, $fontArial, "OF THE PROJECT");
imagepng($img7, 'assets/img/posts/design_notes.png');
imagedestroy($img7);

// =========================================================================
// 8. POST: IT'S A FEELING (800x1000)
// =========================================================================
echo "Generating HD It's a Feeling post...\n";
$img8 = imagecreatetruecolor(800, 1000);
$cream = imagecolorallocate($img8, 244, 241, 235);
imagefill($img8, 0, 0, $cream);

// Place a bedroom vignette in the lower half
$subVignette = createResizedImage('assets/img/hd_sources/hd_its_a_feeling_base.jpg', 800, 400);
imagecopy($img8, $subVignette, 0, 600, 0, 0, 800, 400);
imagedestroy($subVignette);

$charcoal = imagecolorallocate($img8, 45, 50, 55);
$goldBrown = imagecolorallocate($img8, 186, 145, 105);
$sageGreen = imagecolorallocate($img8, 145, 160, 140);
$dustyRose = imagecolorallocate($img8, 195, 145, 140);
$softBlue = imagecolorallocate($img8, 145, 165, 180);

drawReelIcon($img8, 740, 50);

imagettftext($img8, 38, 0, 230, 90, $charcoal, $fontGeorgia, "IT'S A FEELING.");
imagettftext($img8, 18, 0, 375, 130, $goldBrown, $fontGeorgia, "❧");

// Draw the word highlight pills
// WARMTH
imagefilledellipse($img8, 400, 210, 520, 46, $goldBrown);
$white = imagecolorallocate($img8, 255, 255, 255);
imagettftext($img8, 22, 0, 190, 218, $white, $fontArialBold, "Q   W  A  R  M  T  H   B   Z");

// COMFORT
imagefilledellipse($img8, 400, 280, 520, 46, $sageGreen);
imagettftext($img8, 22, 0, 190, 288, $white, $fontArialBold, "C   O  M  F  O  R  T   X   L");

// LOVE
imagefilledellipse($img8, 330, 350, 220, 46, $dustyRose);
imagettftext($img8, 22, 0, 190, 358, $charcoal, $fontArialBold, "P   L  O  V  E   K   J   M   N");

// SOFTNESS
imagefilledellipse($img8, 400, 420, 520, 46, $goldBrown);
imagettftext($img8, 22, 0, 190, 428, $white, $fontArialBold, "S   O  F  T  N  E  S  S   D");

// CALMNESS
imagefilledellipse($img8, 400, 490, 520, 46, $softBlue);
imagettftext($img8, 22, 0, 190, 498, $white, $fontArialBold, "F   C  A  L  M  N  E  S  S");

imagettftext($img8, 18, 0, 285, 570, $goldBrown, $fontArialBold, "NINE WORDS, ONE HOME");

imagepng($img8, 'assets/img/posts/its_a_feeling.png');
imagedestroy($img8);

// =========================================================================
// 9. POST: WITHIN WALLS (800x1000)
// =========================================================================
echo "Generating HD Within Walls post...\n";
$img9 = imagecreatetruecolor(800, 1000);
$cream9 = imagecolorallocate($img9, 242, 238, 230);
imagefill($img9, 0, 0, $cream9);

// Add top right vignette: living room teal
$topRight = createResizedImage('assets/img/hd_sources/hd_room_to_unwind_base.jpg', 380, 360);
imagecopy($img9, $topRight, 410, 10, 0, 0, 380, 360);
imagedestroy($topRight);

// Bottom vignette: bedroom navy
$bottomRight = createResizedImage('assets/img/curated/project_bedroom_navy.jpg', 380, 400);
imagecopy($img9, $bottomRight, 410, 580, 0, 0, 380, 400);
imagedestroy($bottomRight);

drawCarouselIcon($img9, 740, 50);

// Color chips on top left
$swatches = [
    ['#284B55', 'Ocean Teal'],
    ['#F3EFEA', 'Warm Alabaster'],
    ['#45211B', 'Deep Walnut'],
    ['#859281', 'Sage Mist'],
    ['#BA5126', 'Terracotta'],
    ['#D4BE9F', 'Linen Sand']
];
$chipX = 35;
foreach ($swatches as $sw) {
    list($r, $g, $b) = sscanf($sw[0], "#%02x%02x%02x");
    $col = imagecolorallocate($img9, $r, $g, $b);
    imagefilledellipse($img9, $chipX, 180, 44, 44, $col);
    imagerectangle($img9, $chipX - 22, 180 - 22, $chipX + 22, 180 + 22, imagecolorallocatealpha($img9, 0,0,0,100));
    $chipX += 58;
}

$charcoal = imagecolorallocate($img9, 35, 40, 45);
$terracotta = imagecolorallocate($img9, 186, 81, 38);

// Terracotta color block
imagefilledrectangle($img9, 10, 380, 240, 600, $terracotta);

// Banner "WITHIN WALLS"
imagettftext($img9, 38, 0, 300, 480, $charcoal, $fontGeorgia, "WITHIN WALLS");

$caption = "A curated series of interior palettes exploring modern heritage, organic minimalism, and refined comfort.";
drawWrappedText($img9, 17, 0, 35, 680, $charcoal, $fontGeorgia, $caption, 350, 28);

imagepng($img9, 'assets/img/posts/within_walls.png');
imagedestroy($img9);

// Center Helper
function drawCenteredText($img, $size, $angle, $y, $color, $font, $text) {
    $box = imagettfbbox($size, $angle, $font, $text);
    $textW = $box[2] - $box[0];
    $x = (int)((imagesx($img) - $textW) / 2);
    imagettftext($img, $size, $angle, $x, $y, $color, $font, $text);
}

// =========================================================================
// 10. HIGH-RES LOGO (800x800)
// =========================================================================
echo "Generating HD Logo...\n";
$logoImg = imagecreatetruecolor(800, 800);
$bgLight = imagecolorallocate($logoImg, 248, 246, 242);
imagefill($logoImg, 0, 0, $bgLight);

// Outer frame
$gold = imagecolorallocate($logoImg, 197, 168, 128);
$charcoal = imagecolorallocate($logoImg, 30, 34, 40);
$softGray = imagecolorallocate($logoImg, 120, 125, 135);

imagesetthickness($logoImg, 4);
imagerectangle($logoImg, 50, 50, 750, 750, $gold);
imagesetthickness($logoImg, 1);
imagerectangle($logoImg, 65, 65, 735, 735, imagecolorallocatealpha($logoImg, 197, 168, 128, 70));

// Subtle architectural gable watermark
$roofAlpha = imagecolorallocatealpha($logoImg, 197, 168, 128, 100);
imagesetthickness($logoImg, 3);
imageline($logoImg, 140, 330, 400, 180, $roofAlpha);
imageline($logoImg, 400, 180, 660, 330, $roofAlpha);
imageline($logoImg, 180, 330, 400, 210, $roofAlpha);
imageline($logoImg, 400, 210, 620, 330, $roofAlpha);

// Monogram CA
drawCenteredText($logoImg, 150, 0, 430, $charcoal, $fontGeorgiaBold, "CA");

// Brand Name
drawCenteredText($logoImg, 30, 0, 540, $charcoal, $fontGeorgiaBold, "CHAUDHARY ASSOCIATES");

// Tagline
drawCenteredText($logoImg, 16, 0, 605, $gold, $fontArialBold, "ARCHITECTS  •  INTERIOR DESIGNERS  •  BUILD");
drawCenteredText($logoImg, 14, 0, 650, $softGray, $fontArial, "DESIGN  •  BUILD  •  DELIVER");

imagepng($logoImg, 'assets/img/logo_hd.png');
imagepng($logoImg, 'assets/img/logo_square.png');
imagedestroy($logoImg);

echo "ALL 10 ASSETS GENERATED AT HIGH RESOLUTION!\n";
