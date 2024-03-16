<?php
// Chemin absolu vers le dossier contenant les images
$directory = './images/';
$images = glob($directory . '*.png');
$latestImage = '';

$lastModified = 0;

foreach ($images as $image) {
    if (filemtime($image) > $lastModified) {
        $lastModified = filemtime($image);
        $latestImage = basename($image); // Only store the filename
    }
}

// Retourne le chemin web relatif de la dernière image
// Assurez-vous que le chemin retourné est accessible via le navigateur
$image_url = './' . $latestImage; // Assuming localhost
echo json_encode(['image_url' => $image_url]);
?>
