<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Calendar</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f5f5f5;
        }

        .calendar-container {
            min-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .calendar-header button {
            padding: 5px 10px;
            background: #6A0DAD;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 15px;
        }

        .calendar-day {
            border: 1px solid #e0e0e0;
            padding: 8px;
            min-height: 40px;
            background: white;
            text-align: center;
            cursor: pointer;
            position: relative;
        }

        .calendar-day.closed {
            background: #ead1fc;
            color: black;
            cursor: not-allowed;
        }

        .calendar-day.open {
            background: #fff;
            color: black;
            border: 1px solid #e0bdf9;
        }

        .day-header {
            text-align: center;
            font-weight: bold;
            padding: 5px;
            background: #f8f9fa;
            font-size: 0.9em;
        }

        .time-slots {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            padding: 15px 0;
        }

        .time-slot {
            padding: 8px;
            background: #6A0DAD;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
            font-size: 0.9em;
        }

        .time-slot:hover {
            background: #45a049;
            transform: translateY(-2px);
        }

        .time-slot.blocked {
            background:#e0bdf9;
            color: #6A0DAD;
            cursor: not-allowed;
            opacity: 0.7;
        }

        .time-slot.available {
            background: #6A0DAD;
        }

        .selected-date {
            background: #e0bdf9 !important;
            border: 2px solid #6A0DAD !important;
        }

        .status-indicators {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 0.8em;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dot-available { background: #e0bdf9; }
        .dot-blocked { background: #ff5252; }
        .dot-closed { background: #ffebee; }
    </style>
</head>
<body>
    <div class="calendar-container">
        <div class="calendar-header">
            <h2 id="current-month">August 2024</h2>
            <div>
                <button onclick="previousMonth()">←</button>
                <button onclick="nextMonth()">→</button>
            </div>
        </div>
        <div class="status-indicators">
            <div class="status-indicator">
                <div class="status-dot dot-available"></div>
                <span>Available</span>
            </div>
            <div class="status-indicator">
                <div class="status-dot dot-blocked"></div>
                <span>Blocked</span>
            </div>
            <div class="status-indicator">
                <div class="status-dot dot-closed"></div>
                <span>Closed</span>
            </div>
        </div>
        <div class="calendar-grid" id="calendar"></div>
        <div class="time-slots" id="time-slots"></div>
    </div>

    <script>
        let currentDate = new Date();
        let selectedDate = null;
        
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
    </script>
</body>
</html>
