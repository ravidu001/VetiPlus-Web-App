
let currentDate = new Date();
let selectedDate = null;


// Add these functions to your existing Calendar.js file

function goToSelectedDate() {
    const datePicker = document.getElementById('datePicker');
    const selectedDate = new Date(datePicker.value);
    
    // Only update if a valid date is selected
    if (!isNaN(selectedDate.getTime())) {
        currentDate = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), 1);
        initCalendar();
        
        // Select the specific day
        const day = selectedDate.getDate();
        selectDate(day);
        
        // Find and highlight the selected day
        const dayElements = document.querySelectorAll('.calendar-day');
        dayElements.forEach(element => {
            if (parseInt(element.textContent) === day && !element.classList.contains('closed')) {
                element.click();
            }
        });
    }
}

// Sample data for blocked time slots (you would typically get this from an API)
const blockedTimeSlots = {
    '2024-08-15': ['10:00', '10:20', '11:00'],
    '2024-08-16': ['09:00', '09:20', '09:40']
};

// Sample data for closed days (e.g., weekends or holidays)
const closedDays = {
    '2024-08': [4, 11, 18, 25] // Sundays are closed
};

function initCalendar() {
    const calendar = document.getElementById('calendar');
    calendar.innerHTML = '';
    
    const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    days.forEach(day => {
        const dayHeader = document.createElement('div');
        dayHeader.className = 'day-header';
        dayHeader.textContent = day;
        calendar.appendChild(dayHeader);
    });

    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    
    for (let i = 0; i < firstDay.getDay(); i++) {
        calendar.appendChild(document.createElement('div'));
    }
    
    for (let day = 1; day <= lastDay.getDate(); day++) {
        const dayElement = document.createElement('div');
        dayElement.className = 'calendar-day';
        dayElement.textContent = day;

        // Check if day is closed
        const monthKey = `${currentDate.getFullYear()}-${String(currentDate.getMonth() + 1).padStart(2, '0')}`;
        if (closedDays[monthKey]?.includes(day)) {
            dayElement.classList.add('closed');
        } else {
            dayElement.classList.add('open');
            dayElement.onclick = () => selectDate(day);
        }

        calendar.appendChild(dayElement);
    }

    updateMonthDisplay();
}

function selectDate(day) {
    selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
    document.querySelectorAll('.calendar-day').forEach(el => {
        el.classList.remove('selected-date');
        if (el.textContent == day) {
            el.classList.add('selected-date');
        }
    });
    generateTimeSlots();
}

function generateTimeSlots() {
    const timeSlots = document.getElementById('time-slots');
    timeSlots.innerHTML = '';
    
    const dateKey = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
    
    for (let hour = 9; hour <= 14; hour++) {
        for (let minute = 0; minute < 60; minute += 20) {
            const timeSlot = document.createElement('button');
            timeSlot.className = 'time-slot';
            
            const startTime = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
            const endMinute = (minute + 20) % 60;
            const endHour = minute + 20 >= 60 ? hour + 1 : hour;
            const endTime = `${endHour.toString().padStart(2, '0')}:${endMinute.toString().padStart(2, '0')}`;
            
            // Check if time slot is blocked
            if (blockedTimeSlots[dateKey]?.includes(startTime)) {
                timeSlot.classList.add('blocked');
            } else {
                timeSlot.classList.add('available');
            }
            
            timeSlot.textContent = `${startTime} - ${endTime}`;
            timeSlot.onclick = () => {
                if (!timeSlot.classList.contains('blocked')) {
                    toggleTimeSlot(timeSlot, dateKey, startTime);
                }
            };
            timeSlots.appendChild(timeSlot);
        }
    }
}

function toggleTimeSlot(timeSlot, dateKey, startTime) {
    if (timeSlot.classList.contains('blocked')) {
        timeSlot.classList.remove('blocked');
        timeSlot.classList.add('available');
        // Remove from blocked slots
        if (blockedTimeSlots[dateKey]) {
            blockedTimeSlots[dateKey] = blockedTimeSlots[dateKey].filter(time => time !== startTime);
        }
    } else {
        timeSlot.classList.remove('available');
        timeSlot.classList.add('blocked');
        // Add to blocked slots
        if (!blockedTimeSlots[dateKey]) {
            blockedTimeSlots[dateKey] = [];
        }
        blockedTimeSlots[dateKey].push(startTime);
    }
}

function previousMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    initCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    initCalendar();
}

function updateMonthDisplay() {
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 
                  'July', 'August', 'September', 'October', 'November', 'December'];
    document.getElementById('current-month').textContent = 
        `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;
}

// Initialize the calendar
initCalendar();
