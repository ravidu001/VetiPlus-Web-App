<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Calendar</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Calendar.css">
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

   
</body>

<script src="../../assets/jsFIles/salon/Calendar.js"></script>
</html>
