// Get the canvas context
const appointmentChartContext = document.getElementById('appointmentChart').getContext('2d');

// Data for the chart
const appointmentData = {
    labels: ['2020', '2021', '2022', '2023'], // X-axis labels (Years)
    datasets: [
        {
            label: 'Appointments',
            data: [120, 154, 260, 295], // Example data
            borderColor: '#6a0dad', // Light green line
            tension: 0.4, // Makes the line smooth
            fill: true,
            pointBackgroundColor: '#6a0dad', // Point color
            pointRadius: 4 // Point size
        },
        {
            label: 'Canceled Appointments',
            data: [20, 50, 40, 30], // Example data
            borderColor: '#8F53B4', // Light pink line
            tension: 0.4, // Makes the line smooth
            fill: true,
            pointBackgroundColor: '#8F53B4', // Point color
            pointRadius: 4 // Point size
        }
    ]
};

// Configuration for the chart
const appointmentChartConfig = {
    type: 'line', // Line chart
    data: appointmentData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top', // Position of the legend
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return `${tooltipItem.dataset.label}: ${tooltipItem.raw}`;
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true, // Start Y-axis from 0
                title: {
                    display: true,
                    text: 'Number of Appointments' // Y-axis label
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Years' // X-axis label
                }
            }
        }
    }
};

// Render the chart
new Chart(appointmentChartContext, appointmentChartConfig);