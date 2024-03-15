document.addEventListener('DOMContentLoaded', function () {
    const tempDisplay = document.querySelector("#temp-display");
    const validateBtn = document.getElementById('validateBtn');
    
    validateBtn.addEventListener('click', function () {
        const chosenTemperature = parseFloat(tempDisplay.textContent);
        if (!isNaN(chosenTemperature)) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_temperature.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send('chosenTemperature=' + chosenTemperature);
        }
    });
});
