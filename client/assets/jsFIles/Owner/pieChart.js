const ctx = document.getElementById('pieChart').getContext('2d');

        const data = {
            labels: ['Vet Doctor', 'Pet Owner', 'Admin', 'Pets', 'Salon',],
            datasets: [{
                label: 'Votes',
                data: [12, 19, 3, 5, 2],
                backgroundColor: [
                    '#6a0dad',
                    '#8F53B4',
                    '#c8a2c8',
                    '#B89ACB',
                    'rgba(153, 102, 255, 0.7)'
                ],
                borderColor: [
                    '#6a0dad',
                    '#8F53B4',
                    '#c8a2c8',
                    '#B89ACB',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Number of user'
                    }
                }
            }
        };

        new Chart(ctx, config);