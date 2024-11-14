document.addEventListener("DOMContentLoaded", function() {
    // Get references to the buttons and tables
    const queueBtn = document.querySelector('.queueBtn');
    const cancelBtn = document.querySelector('.cancelBtn');
    const completeBtn = document.querySelector('.completeBtn');

    const queueTable = document.getElementById('queue');
    const cancelledTable = document.getElementById('cancelled');
    const rescheduledTable = document.getElementById('rescheduled');

    // Function to show the selected table and hide the others
    function showTable(tableToShow, activeButton) {
        queueTable.style.display = 'none';
        cancelledTable.style.display = 'none';
        rescheduledTable.style.display = 'none';
        
        tableToShow.style.display = 'table'; // Show the selected table
        
        // Remove active class from all buttons
        queueBtn.classList.remove('active');
        cancelBtn.classList.remove('active');
        completeBtn.classList.remove('active');
        
        // Add active class to the clicked button
        activeButton.classList.add('active');
    }

    // Set up event listeners for the buttons
    queueBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        showTable(queueTable, queueBtn);
    });

    cancelBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        showTable(cancelledTable, cancelBtn);
    });

    completeBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        showTable(rescheduledTable, completeBtn);
    });

    // Initially show the queue table and set the queue button as active
    showTable(queueTable, queueBtn);
});
