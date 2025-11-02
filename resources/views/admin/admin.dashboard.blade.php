<x-menu-link>
    @section('content')
        <h1>Admin Dashboard</h1>
        <ul>
            @foreach($contents as $content)
                <li>{{ $content->title }}</li>
            @endforeach
        </ul>
    @endsection
</x-menu-link>
