let removedElements = []; // Array to store removed elements

function handleFormSubmit(event, formId) {
    event.preventDefault(); // Prevent default form submission
    
    if (formId === 'certificate-form') {
        hide(); // Hide the certificate form
        
    } else {
        show(); // Show the certificate form
        
    }
}

function hide() {
    // Get the appointment content div
    var certificateContent = document.getElementById("certificate-form");
    
    // Hide all child elements of certificate-form and store them in removedElements
    while (certificateContent.firstChild) {
        removedElements.push(certificateContent.firstChild); // Store the removed element
        certificateContent.removeChild(certificateContent.firstChild);
    }

    // Display the recommendation content section
    document.getElementById('recomendation-content').style.display = 'block';
}

function show() {
    // Get the appointment content div
    var certificateContent = document.getElementById("certificate-form");

    // Restore all removed elements in the correct order
    for (let i = 0; i < removedElements.length; i++) {
        certificateContent.appendChild(removedElements[i]);
    }

    // Clear the removedElements array after restoring
    removedElements = [];

    // Ensure the appointment content is visible
    certificateContent.style.display = 'block';

    // Hide the recommendation content section
    document.getElementById('recomendation-content').style.display = 'none';
}