<x-layout>
    
    <form action="{{ route('search-console.add-site') }}" method="POST">
        @csrf
        <label for="siteUrl">Site URL:</label>
        <input type="text" name="siteUrl" id="siteUrl" placeholder="http://www.example.com/" required>
        <button type="submit">Add Site</button>
    </form>

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-layout>
