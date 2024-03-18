<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = []; 

    if (isset($_POST['temperature'])) {
        $temperature = $_POST['temperature'];
        $data['temperature'] = $temperature;
    }

    if (isset($_POST['humidity'])) {
        $humidity = $_POST['humidity'];
        $data['humidite'] = $humidity;
    }

    if (isset($_POST['luminosity'])) {
        $luminosity = $_POST['luminosity'];
        $data['luminosite'] = $luminosity;
    }

    $jsonData = file_get_contents('data_arduino.json');
    $jsonDataDecoded = json_decode($jsonData, true);

    $updatedData = array_merge($jsonDataDecoded, $data);

    $jsonEncodedData = json_encode($updatedData, JSON_PRETTY_PRINT);

    file_put_contents('data_arduino.json', $jsonEncodedData);

    echo json_encode(['success' => true]);
} else {
    http_response_code(405);
}
?>
