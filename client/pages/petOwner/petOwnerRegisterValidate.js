
const regForm = document.getElementById('regForm');
const errors = []

regForm.addEventListener('submit', (e) => {
    const userName = document.getElementById('name');
    const dob = document.getElementById('dob');
    const houseNo = document.getElementById('houseNo');
    const street = document.getElementById('street');
    const city = document.getElementById('city');
    const contact = document.getElementById('contact');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    e.preventDefault();

    console.log("Checking inputs");
    if (checkInputs()) {
        regForm.submit()
    }
    else alert(errors)
});

function checkInputs() {
    let isValid = true;
    
    // Name validation
    const userNameValue = userName.value.trim();
    if (userNameValue === '') {
        setErrorFor(userName, "Name cannot be blank.");
        isValid = false;
    } else if (userNameValue.length < 2) {
        setErrorFor(userName, "Name must be at least 2 characters long.");
        isValid = false;
    } else {
        setSuccessFor(userName);
    }

    // Date of Birth validation
    const dobValue = new Date(dob.value);
    const today = new Date();
    const minAge = 18;
    const maxAge = 120;
    
    if (!dob.value) {
        setErrorFor(dob, "Date of Birth cannot be blank.");
        isValid = false;
    } else if (dobValue > today) {
        setErrorFor(dob, "Date of Birth cannot be in the future.");
        isValid = false;
    } else {
        const age = today.getFullYear() - dobValue.getFullYear();
        if (age < minAge || age > maxAge) {
            setErrorFor(dob, `Age must be between ${minAge} and ${maxAge} years.`);
            isValid = false;
        } else {
            setSuccessFor(dob);
        }
    }

    // Address validation
    const houseNoValue = houseNo.value.trim();
    const streetValue = street.value.trim();
    const cityValue = city.value.trim();

    if (houseNoValue === '') {
        setErrorFor(houseNo, "House/Apartment number cannot be blank.");
        isValid = false;
    } else {
        setSuccessFor(houseNo);
    }

    if (streetValue === '') {
        setErrorFor(street, "Street cannot be blank.");
        isValid = false;
    } else {
        setSuccessFor(street);
    }

    if (cityValue === '') {
        setErrorFor(city, "City cannot be blank.");
        isValid = false;
    } else {
        setSuccessFor(city);
    }

    // Contact validation
    const contactValue = contact.value.trim();
    const phoneRegex = /^\+?[\d\s-]{10,}$/;  // Basic phone validation
    
    if (contactValue === '') {
        setErrorFor(contact, "Contact number cannot be blank.");
        isValid = false;
    } else if (!phoneRegex.test(contactValue)) {
        setErrorFor(contact, "Please enter a valid phone number.");
        isValid = false;
    } else {
        setSuccessFor(contact);
    }

    // Email validation
    const emailValue = email.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (emailValue === '') {
        setErrorFor(email, "Email cannot be blank.");
        isValid = false;
    } else if (!emailRegex.test(emailValue)) {
        setErrorFor(email, "Please enter a valid email address.");
        isValid = false;
    } else {
        setSuccessFor(email);
    }

    // Password validation
    const passwordValue = password.value.trim();
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    
    if (passwordValue === '') {
        setErrorFor(password, "Password cannot be blank.");
        isValid = false;
    } else if (!passwordRegex.test(passwordValue)) {
        setErrorFor(password, "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
        isValid = false;
    } else {
        setSuccessFor(password);
    }

    // Confirm Password validation
    const confirmPasswordValue = confirmPassword.value.trim();
    
    if (confirmPasswordValue === '') {
        setErrorFor(confirmPassword, "Please confirm your password.");
        isValid = false;
    } else if (confirmPasswordValue !== passwordValue) {
        setErrorFor(confirmPassword, "Passwords do not match.");
        isValid = false;
    } else {
        setSuccessFor(confirmPassword);
    }

    return isValid;
}

// function setErrorFor(input, message) {
//     errors.push(toString(input) + toString(message))
// }

// function setSuccessFor(input) {
//     console.log("valid "+ input)
// }
function setErrorFor(input, message) {
    const inputContainer = input.parentElement;
    const small = inputContainer.querySelector('small');

    small.innerText = message;
    inputContainer.classList.add("error");
    inputContainer.classList.remove("success");
}

function setSuccessFor(input) {
    const inputContainer = input.parentElement;
    inputContainer.classList.add("success");
    inputContainer.classList.remove("error");
}