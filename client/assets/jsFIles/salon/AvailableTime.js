// Salon Hours Data
const salonHours = [
    { day: 'Sunday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Monday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Tuesday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Wednesday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Thursday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Friday', openTime: '3:00 PM', closeTime: '4:00 PM' },
    { day: 'Saturday', openTime: '3:00 PM', closeTime: '4:00 PM' }
];

// Original hours backup (for cancel functionality)
let originalHours = JSON.parse(JSON.stringify(salonHours));

// Render initial hours
function renderHours() {
    const tableBody = document.getElementById('hoursTableBody');
    tableBody.innerHTML = ''; // Clear existing rows

    salonHours.forEach((hourData, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${hourData.day}</td>
            <td class="editable" data-index="${index}" data-field="openTime">${hourData.openTime}</td>
            <td class="editable" data-index="${index}" data-field="closeTime">${hourData.closeTime}</td>
        `;
        tableBody.appendChild(row);
    });
}

// Toggle Edit Mode
function toggleEditMode() {
    const editableColumns = document.querySelectorAll('.editable');
    const saveSection = document.getElementById('saveSection');
    const editBtn = document.getElementById('editBtn');

    editableColumns.forEach(column => {
        const currentValue = column.textContent;
        const index = column.getAttribute('data-index');
        const field = column.getAttribute('data-field');

        column.innerHTML = `
            <input 
                type="text" 
                value="${currentValue}" 
                data-index="${index}" 
                data-field="${field}"
            >
        `;
    });

    saveSection.style.display = 'block';
    editBtn.disabled = true;
}

// Validate Time Format
function validateTimeFormat(time) {
    // Regex to match time format like "3:00 PM" or "10:30 AM"
    const timeRegex = /^(1[0-2]|0?[1-9]):([0-5][0-9]) ?([AaPp][Mm])$/;
    return timeRegex.test(time);
}

// Save Changes
function saveChanges() {
    const inputs = document.querySelectorAll('.editable input');
    let isValid = true;

    inputs.forEach(input => {
        const index = input.getAttribute('data-index');
        const field = input.getAttribute('data-field');
        const value = input.value.trim();

        // Validate time format
        if (!validateTimeFormat(value)) {
            input.style.border = '2px solid red';
            isValid = false;
        } else {
            input.style.border = '';
            salonHours[index][field] = value;
        }
    });

    if (isValid) {
        // Update original hours for potential cancel
        originalHours = JSON.parse(JSON.stringify(salonHours));
        renderHours();
        document.getElementById('saveSection').style.display = 'none';
        document.getElementById('editBtn').disabled = false;
        alert('Hours updated successfully!');
    } else {
        alert('Please enter valid time format (e.g., 3:00 PM)');
    }
}

// Cancel Edit
function cancelEdit() {
    // Restore original hours
    salonHours.splice(0, salonHours.length, ...originalHours);
    renderHours();
    document.getElementById('saveSection').style.display = 'none';
    document.getElementById('editBtn').disabled = false;
}

// Initial render
renderHours();
