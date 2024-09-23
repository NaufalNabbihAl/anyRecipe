<x-layout>
    <form method="GET" action="{{ route('analytics.show') }}">
        <label for="startDate">Start Date:</label>
        <input type="date" name="startDate" value="{{ request('startDate', '2024-01-01') }}">

        <label for="endDate">End Date:</label>
        <input type="date" name="endDate" value="{{ request('endDate', '2024-12-31') }}">

        <button type="submit">Update Chart</button>
    </form>
    <br>

    <canvas id="analyticsChart" width="400" height="200"></canvas>
    <script>
        var ctx = document.getElementById('analyticsChart').getContext('2d');
        var analyticsChart = new Chart(ctx, {
            type: 'line', // Bisa juga gunakan 'bar', 'pie', dll.
            data: {
                labels: {!! json_encode($dates) !!}, // Data tanggal
                datasets: [{
                    label: 'Jumlah Klik',
                    data: {!! json_encode($clicks) !!}, // Data klik
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</x-layout>
