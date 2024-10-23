function togglePassword() {
    const passwordField = document.getElementById('password');
    const passwordToggle = document.querySelector('.toggle-password');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.textContent = '🙈';
    } else {
        passwordField.type = 'password';
        passwordToggle.textContent = '👁️';
    }
}

document.querySelector('.login-form').addEventListener('submit', function(e) {
    const phoneInput = document.getElementById('phone');
    const phoneValue = phoneInput.value;

    // Validate phone number (only numbers, exactly 10 digits)
    const phoneRegex = /^[0-9]{10}$/;

    if (!phoneRegex.test(phoneValue)) {
        e.preventDefault(); // Prevent form submission
        alert('Please enter a valid phone number (10 digits).');
    }
});