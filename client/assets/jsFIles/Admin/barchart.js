 const chartCanvas = document.getElementById('barChart').getContext('2d');

 // Define the data for the bar chart
 const appointmentData = {
     labels: ['January', 'February', 'March', 'April', 'May', 'June'],
     datasets: [{
         label: 'Number of Appointment',
         data: [500, 700, 800, 600, 900, 1000],
         backgroundColor: [
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad'
         ],
         borderColor: [
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad',
             '#6a0dad'
         ],
         borderWidth: 1
     }]
 };

 // Define the configuration
 const chartConfig = {
     type: 'bar',
     data: appointmentData,
     options: {
         responsive: true,
         plugins: {
             legend: {
                 position: 'top',
                 
             },
             title: {
                 display: true,
                 text: 'Monthly Appointment Data'
                 
             }
         },
         scales: {
             y: {
                 beginAtZero: true
             }
         }
     }
 };

 // Render the chart
 new Chart(chartCanvas, chartConfig);