<x-layout>
    <!-- resources/views/search-console/analytics.blade.php -->
    <table>
        <thead>
            <tr>
                <th>Query</th>
                <th>Clicks</th>
                <th>Impressions</th>
                <th>CTR</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($analyticsData->rows as $row)
                <tr>
                    <td>{{ $row->keys[0] }}</td>
                    <td>{{ $row->clicks }}</td>
                    <td>{{ $row->impressions }}</td>
                    <td>{{ $row->ctr }}</td>
                    <td>{{ $row->position }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
