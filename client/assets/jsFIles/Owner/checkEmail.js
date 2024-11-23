document.getElementById('checkEmailButton').addEventListener('click', function (event) {
    const emailInput = document.getElementById("email");
    const email = emailInput.value.trim();

    // Basic email regex validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    fetch('../../addAdmin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.exists) {
                window.location.href = `adminProfile.php?email=${email}`;
            } else {
                alert("Email does not exist in the database.");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
        });
});