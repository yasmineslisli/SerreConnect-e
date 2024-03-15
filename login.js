document.addEventListener('DOMContentLoaded', () => {
    const pinInput = document.getElementById('pin');
    const keypadButtons = document.querySelectorAll('.key');
    const forgotPinLink = document.querySelector('.forgot-pin');
  
    // Handle keypad button click
    keypadButtons.forEach(button => {
      button.addEventListener('click', () => {
        const keyValue = button.textContent;
  
        // Check if the button is for deletion
        if (button.classList.contains('delete')) {
          pinInput.value = pinInput.value.slice(0, -1); // Remove last digit
        } else if (pinInput.value.length < 4) {
          pinInput.value += keyValue; // Add digit to PIN
        }
      });
    });
  
    // Handle "Forgot Your PIN Code?" link
    forgotPinLink.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent the default link action
      alert('Please contact support to reset your PIN.');
      // Here you can add more complex logic, such as displaying a modal or redirecting to a support page.
    });
  });
  