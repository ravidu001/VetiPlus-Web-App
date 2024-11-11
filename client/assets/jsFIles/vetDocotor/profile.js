
function changePassword() {
    document.getElementById('current-password').style.display = 'table-row';
    document.getElementById('new-password').style.display = 'table-row';
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
    document.getElementById('confirm-password').style.display = 'none';
    document.getElementById('cancel-password').style.display = 'none';

    document.getElementById('newCurrentPassword').value = '';
    document.getElementById('newPassword').value = '';
    document.getElementById('confirmPassword').value = '';
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



      