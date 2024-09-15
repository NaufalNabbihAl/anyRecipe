<!DOCTYPE html>
<html>
<head>
    <title>Google Search Console Analytics</title>
</head>
<body>
    <h1>Search Console Data</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ route('analytics.show') }}">View Search Analytics</a>
    @if(isset($analytics))
        <table>
            <thead>
                <tr>
                    <th>Query</th>
                    <th>Clicks</th>
                    <th>Impressions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($analytics->rows as $row)
                <tr>
                    <td>{{ $row->keys[0] }}</td>
                    <td>{{ $row->clicks }}</td>
                    <td>{{ $row->impressions }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>