document.addEventListener('DOMContentLoaded', function() {
    // Path to your JSON file, adjust as necessary
    const filePath = './data_arduino.json';

    fetch(filePath)
        .then(response => response.json())
        .then(data => {
            // Assuming the JSON structure is:
            // {"humidite":100,"luminosite":50,"temperature":25}

            document.getElementById('humidite').textContent = data.humidite;
            document.getElementById('luminosite').textContent = data.luminosite;
            document.getElementById('temperature').textContent = data.temperature;
        })
        .catch(error => console.error('Error fetching the JSON file:', error));
});
