@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <!-- Your specific content for the students page goes here -->
        
        <div class="content">
                        <!-- Chart Section -->
                        <div class="chart-container">
                            <h3>Students</h3>
                            <canvas id="myChart" width="150" height="90"></canvas>
                        </div>  
        </div>

    <!-- Include your JavaScript files here -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        // Retrieve data passed from the controller
        var labels = {!! json_encode($labels) !!};
        var values = {!! json_encode($values) !!};

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Data from Your Table',
                    data: values,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                // Additional options here
            }
        });
    </script>
    
@endsection

    
</body>
</html>
