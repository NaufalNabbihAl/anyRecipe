<x-layout>
    <h1>Google Search Console Sites</h1>
    <ul>
        @foreach ($sites as $site)
            <li>{{ $site->siteUrl }} - {{ $site->permissionLevel }}</li>
        @endforeach
    </ul>
</x-layout>
