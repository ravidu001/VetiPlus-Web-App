function addAssistant() {
    document.getElementById('assistant').style.display = 'table-row';
    document.getElementById('assistant1').style.display = 'table-row';
    document.getElementById('assistant2').style.display = 'table-row';
    document.getElementById('submit').style.display = 'none';
}

function resetAssistant() {
    document.getElementById('assistant').style.display = 'none';
    document.getElementById('assistant1').style.display = 'none';
    document.getElementById('assistant2').style.display = 'none';
    document.getElementById('submit').style.display = 'table-row';

    document.getElementById('assistant').value = '';
    document.getElementById('assistant1').value = '';
}

let removedElements = []; // Array to store removed elements


function hide() {
    // Get the appointment content div
    var appointmentContent = document.getElementById("appointment-content");
    
    // Hide all child elements of appointment-content and store them in removedElements
    while (appointmentContent.firstChild) {
        removedElements.push(appointmentContent.firstChild); // Store the removed element
        appointmentContent.removeChild(appointmentContent.firstChild);
    }

    // Display the assistant select section
    document.getElementById('assistant-select').style.display = 'block';
}

function show() {
    // Get the appointment content div
    var appointmentContent = document.getElementById("appointment-content");

    // Restore all removed elements in the correct order
    for (let i = 0; i < removedElements.length; i++) {
        appointmentContent.appendChild(removedElements[i]);
    }

    // Clear the removedElements array after restoring
    removedElements = [];

    // Ensure the appointment content is visible
    appointmentContent.style.display = 'block';

    // Hide the assistant select section
    document.getElementById('assistant-select').style.display = 'none';
}

// Variable to store previous appointment data
let previousAppointmentData = {};

// Function to save the appointment data
function saveAppointmentData() {
    const form = document.forms['newAppointment'];
    previousAppointmentData.startTime = form.startTime.value;
    previousAppointmentData.endTime = form.endTime.value;
    previousAppointmentData.clinicLocation = form.clinicLocation.value;
    previousAppointmentData.note = form.note.value;
    previousAppointmentData.needAssistant = form.needAssistant.value;
    previousAppointmentData.noOfAssistant = form.noOfAssistant.value;
    previousAppointmentData.district = form.district.value;
}

// Function to restore the appointment data
function restoreAppointmentData() {
    const form = document.forms['newAppointment'];
    form.startTime.value = previousAppointmentData.startTime || '';
    form.endTime.value = previousAppointmentData.endTime || '';
    form.clinicLocation.value = previousAppointmentData.clinicLocation || '';
    form.note.value = previousAppointmentData.note || '';
    form.needAssistant.value = previousAppointmentData.needAssistant || 'No';
    form.noOfAssistant.value = previousAppointmentData.noOfAssistant || '';
    form.district.value = previousAppointmentData.district || '';
}

// Function to handle the cancel request
function handleCancelRequest() {
    // Clear the assistant request form
    const assistantForm = document.forms['assistantRequest'];
    assistantForm.reset(); // Reset the assistant request form
    
    // Restore the appointment data
    //restoreAppointmentData();
    
    // Show the appointment content
    document.getElementById("assistant-select").style.display = 'none'; // Hide the assistant request section
    document.getElementById("appointment-content").style.display = 'block';
    
}

