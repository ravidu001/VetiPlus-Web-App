
function changePassword() {
    document.getElementById('current-password').style.display = 'table-row';
    document.getElementById('new-password').style.display = 'table-row';
    document.getElementById('password-message').style.display = 'table-row';
    document.getElementById('confirm-password').style.display = 'table-row';
    document.getElementById('cancel-password').style.display = 'table-row';
}

function addSpecialization() {
    var special2 = document.getElementById('special2');
    var special3 = document.getElementById('special3');

    // Check which row is currently hidden and display it
    if (special2.style.display === 'none') {
        special2.style.display = 'table-row';
    } else if (special3.style.display === 'none') {
        special3.style.display = 'table-row';
    }
}


    /* I need to add the functionality, when click on cancel button,
    the tr id containing the new-password, confirm-password and current-password will be cleared and hidden  
    */     
   
function resetPassword() {
    document.getElementById('current-password').style.display = 'none';
    document.getElementById('new-password').style.display = 'none';
    document.getElementById('password-message').style.display = 'none';
    document.getElementById('confirm-password').style.display = 'none';
    document.getElementById('cancel-password').style.display = 'none';

    document.getElementById('newCurrentPassword').value = '';
    document.getElementById('newPassword').value = '';
    document.getElementById('confirmPassword').value = '';
    document.getElementById('passwordMessage').textContent = '';
}

function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const passwordToggle = passwordField.nextElementSibling; // The button next to the field

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.textContent = '🙈'; // Change icon to "hide" emoji
    } else {
        passwordField.type = 'password';
        passwordToggle.textContent = '👁️'; // Change icon to "show" emoji
    }
}

/*
// Function to update the profile picture based on the theme
function updateProfilePicture() {
    const profilePicture = document.getElementById('profile-picture');
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Set the profile picture based on the initial theme
    if (isDarkMode) {
        profilePicture.src = '../../assets/images/file.png';
    } else {
        profilePicture.src = '../../assets/images/defaultProfile.png';
    }
}

// Call the function to set the initial profile picture
updateProfilePicture();

// Add an event listener to update the profile picture when the theme changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
    const profilePicture = document.getElementById('profile-picture');
    if (event.matches) {
        profilePicture.src = '../../assets/images/file.png';
    } else {
        profilePicture.src = '../../assets/images/defaultProfile.png';
    }
});
*/

document.getElementById('box').addEventListener('change', function(event) {
  const profilePic = document.getElementById('profile-pic'); // The profile picture element
  const file = event.target.files[0];

  // Check if a file is selected
  if (file) {
    const reader = new FileReader();

    // Onload event for setting the uploaded image as the profile picture
    reader.onload = function(e) {
      profilePic.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {
    // If no file selected, revert to default profile picture
    profilePic.src = 'defaulProfile.png';
  }
});


// password check
document.addEventListener('DOMContentLoaded', function() {
    const newPasswordInput = document.getElementById('newPassword');
    const passwordMessage = document.getElementById('passwordMessage');

    newPasswordInput.addEventListener('input', function() {
        const password = newPasswordInput.value;
        let message = '';
        let color = 'red';

        if (password.length < 4) {
            message = 'Poor password';
        } else if (password.length < 8) {
            message = 'Good password';
        } else if (password.length >= 8) {
            const hasLetters = /[a-zA-Z]/.test(password);
            const hasNumbers = /[0-9]/.test(password);
            const hasSymbols = /[!@#$%^&*(),.?":{}|<>]/.test(password);

            if (hasLetters && hasNumbers && hasSymbols) {
                message = 'Strong password';
                color = 'green';
            } else {
                message = 'Password should contain letters, numbers, and symbols';
            }
        }

        passwordMessage.textContent = message;
        passwordMessage.style.color = color;
    });
});

// function to validate date of birth
document.addEventListener('DOMContentLoaded', function() {
    const dobInput = document.getElementById('DOB');
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
    const maxDateString = maxDate.toISOString().split('T')[0];
    dobInput.setAttribute('max', maxDateString);
});

// fuction to validate phone number
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('contactNumber');
    const phoneMessage = document.getElementById('phoneMessage');

    phoneInput.addEventListener('input', function() {
        const phoneNumber = phoneInput.value;
        let message = '';
        let color = 'red';

        const phonePattern = /^0\d{9}$/;

        if (phonePattern.test(phoneNumber)) {
            message = 'Valid phone number';
            color = 'green';
        } else {
            if (phoneNumber.length ==0) {
                message = '';
            } else if (phoneNumber.length !== 10) {
                message = 'Phone number must be exactly 10 digits';
            } else if (!phoneNumber.startsWith('0')) {
                message = 'Phone number must start with 0';
            } else if (!/^\d+$/.test(phoneNumber)) {
                message = 'Phone number must contain only numbers';
            }
            else  {
                message = 'Invalid phone number';
            }
        }

        phoneMessage.textContent = message;
        phoneMessage.style.color = color;
    });
});

function validateExperience() {
    var experience = document.getElementById('experience').value;
    var experienceError = document.getElementById('experienceError');

    if (experience <= 0) {
        experienceError.textContent = 'Experience must be a positive number.';
        alter('Experience must be a positive number.');
        
    } else {
        experienceError.textContent = '';
    }
}

function validateTreatmentTime() {
    var treatmentTime = document.getElementById('treatmentTime').value;
    var treatmentTimeError = document.getElementById('treatmentTimeError');

    if (treatmentTime <= 0) {
        treatmentTimeError.textContent = 'Time taken to treat (in minutes) must be a positive number.';
    } else {
        treatmentTimeError.textContent = '';
    }
}

      