<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your health status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container">
    <h1>Statistics</h1>

    <!-- Bar graph canvas -->
    <canvas id="barChart" width="400" height="200"></canvas>

    <div class="statistic">
        <span>Total Users:</span>
        <span id="totalUsers">0</span>
    </div>

    <div class="statistic">
        <span>Active Users:</span>
        <span id="activeUsers">0</span>
    </div>

    <div class="statistic">
        <span>Revenue:</span>
        <span id="revenue">$0</span>
    </div>
</div>

<script>
    // Simulated data (replace with real data)
    const totalUsers = 1000;
    const activeUsers = 500;
    const revenue = 50000;

    // Update the HTML content with the statistics
    document.getElementById('totalUsers').textContent = totalUsers;
    document.getElementById('activeUsers').textContent = activeUsers;
    document.getElementById('revenue').textContent = `$${revenue.toLocaleString()}`;

    // Bar graph data
    const barChartData = {
        labels: ['Total Users', 'Active Users', 'Revenue'],
        datasets: [{
            label: 'Statistics',
            backgroundColor: ['#36a2eb', '#ffce56', '#4caf50'],
            data: [totalUsers, activeUsers, revenue]
        }]
    };

    // Get the bar chart canvas element
    const ctx = document.getElementById('barChart').getContext('2d');

    // Create a new bar chart
    const myBarChart = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value) { return '$' + value.toLocaleString(); }
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
