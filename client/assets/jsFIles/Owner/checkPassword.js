document.getElementById("deleteForm").addEventListener("submit", function (event) {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("cpassword").value;

    if (password !== confirmPassword) {
        event.preventDefault(); // Prevent form submission
        alert("Passwords do not match. Please try again.");
    }
});