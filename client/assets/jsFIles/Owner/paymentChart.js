// Get the canvas context
const paymentChartContext = document.getElementById('paymentChart').getContext('2d');

// Data for the payment chart
const paymentData = {
    labels: [
        'January', 'February', 'March', 'April', 'May', 
        'June', 'July', 'August', 'September', 'October', 
        'November', 'December'
    ],
    datasets: [
        {
            label: 'Monthly Income',
            data: [950, 800, 1200, 1000, 850, 900, 1050, 1100, 1250, 1400, 1300, 1500],
            backgroundColor: '#6a0dad', // Greenish
            borderColor: '#6a0dad',
            borderWidth: 1
        },
        {
            label: 'Monthly Outcome',
            data: [480, 523, 700, 600, 450, 400, 500, 600, 700, 800, 750, 900],
            backgroundColor: '#c8a2c8', // Orangish
            borderColor: '#c8a2c8',
            borderWidth: 1
        }
    ]
};

// Configuration for the payment chart
const paymentChartConfig = {
    type: 'bar',
    data: paymentData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return `${tooltipItem.dataset.label}: $${tooltipItem.raw}`;
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Amount ($)'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Months'
                }
            }
        }
    }
};

// Render the payment chart
new Chart(paymentChartContext, paymentChartConfig);
