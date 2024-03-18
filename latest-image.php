<?php
$directory = './images/';
$images = glob($directory . '*.*');
$latestImage = '';

$lastModified = 0;

foreach ($images as $image) {
    if (filemtime($image) > $lastModified) {
        $lastModified = filemtime($image);
        $latestImage = basename($image); 
    }
}

$image_url = './' . $latestImage; 
?>
