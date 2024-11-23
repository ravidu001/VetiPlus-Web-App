function showAlert(message) {
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');

    alertMessage.textContent = message;
    alertBox.classList.remove('hidden'); // Show the alert box
}

function closeAlert() {
    document.getElementById('alertBox').classList.add('hidden'); // Hide the alert box
}

function validateForm() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('cpassword').value;
    const phoneNumber = document.getElementById('phone_number').value;
    const nic = document.getElementById('nic').value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showAlert('Please enter a valid email address.');
        return false;
    }

    if (password !== confirmPassword) {
        showAlert('Passwords do not match.');
        return false;
    }

    const phoneRegex = /^0\d{9}$/;
    if (!phoneRegex.test(phoneNumber)) {
        showAlert('Please enter a valid phone number (10 digits starting with 0).');
        return false;
    }

    const nicRegex = /^\d{12}$/;
    if (!nicRegex.test(nic)) {
        showAlert('Please enter a valid NIC number (12 digits).');
        return false;
    }

    return true;
}