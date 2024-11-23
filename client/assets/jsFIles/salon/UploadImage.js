// Select the file input and image preview elements
const fileInput1 = document.getElementById('image1');
const previewImage1 = document.getElementById('preview1');

// Add an event listener to the file input
fileInput1.addEventListener('change', function(event) {
    const file = event.target.files[0]; // Get the selected file
    if (file) {
        const reader = new FileReader(); // Create a FileReader object

        // Define what happens when the file is read
        reader.onload = function(e) {
            previewImage1.src = e.target.result; // Set the image src to the file's data URL
        };

        reader.readAsDataURL(file); // Read the file as a data URL
    } else {
        previewImage1.src = ''; // Reset the image if no file is selected
    }
});


// Select the file input and image preview elements
const fileInput2 = document.getElementById('image2');
const previewImage2 = document.getElementById('preview2');

// Add an event listener to the file input
fileInput2.addEventListener('change', function(event) {
    const file = event.target.files[0]; // Get the selected file
    if (file) {
        const reader = new FileReader(); // Create a FileReader object

        // Define what happens when the file is read
        reader.onload = function(e) {
            previewImage2.src = e.target.result; // Set the image src to the file's data URL
        };

        reader.readAsDataURL(file); // Read the file as a data URL
    } else {
        previewImage2.src = ''; // Reset the image if no file is selected
    }
});
