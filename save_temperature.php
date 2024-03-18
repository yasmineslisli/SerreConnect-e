<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['temperature'])) {
        $temperature = $_POST['temperature'];
        file_put_contents('temperature.txt', $temperature);
        echo json_encode(['success' => true]);
    } elseif (isset($_POST['humidity'])) {
        $humidity = $_POST['humidity'];
        file_put_contents('humidity.txt', $humidity);
        echo json_encode(['success' => true]);
    } elseif (isset($_POST['luminosity'])) {
        $luminosity = $_POST['luminosity'];
        file_put_contents('luminosity.txt', $luminosity);
        echo json_encode(['success' => true]);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid parameter']);
    }
} else {
    http_response_code(405);
}
?>
