document.addEventListener("DOMContentLoaded", function() {
    // Get references to the buttons and tables
    const cancelBtn = document.querySelector('.cancelBtn');
    const completeBtn = document.querySelector('.completeBtn');

    const cancelledTable = document.getElementById('cancelled');
    const rescheduledTable = document.getElementById('rescheduled');

    // Function to show the selected table and hide the others
    function showTable(tableToShow, activeButton) {
        cancelledTable.style.display = 'none';
        rescheduledTable.style.display = 'none';
        
        tableToShow.style.display = 'table'; // Show the selected table
        
        // Remove active class from all buttons
        cancelBtn.classList.remove('active');
        completeBtn.classList.remove('active');
        
        // Add active class to the clicked button
        activeButton.classList.add('active');
    }

    cancelBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        showTable(cancelledTable, cancelBtn);
    });

    completeBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        showTable(rescheduledTable, completeBtn);
    });

    // Initially show the rescheduled table and set the complete button as active
    showTable(rescheduledTable, completeBtn);
});