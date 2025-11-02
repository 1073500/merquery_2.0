<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Contents Page</h1>
            <div class="m-6">
                @include('components.search-bar')
            </div>
            <div>
                @include('components.filter')
            </div>
        </div>
    </x-slot>
    <x-slot name="Content">
        <div class="m-5">
            @foreach($contents as $content)
                <a href="{{ route('contents.show', $content) }}">
                    <li class="transform transition duration-300 hover:scale-110 hover:cursor-grab  hover:bg-gray-800 m-2 p-2 bg-gray-900 border border-gray-800 rounded-lg">
                        <strong>{{ $content['title'] }}:</strong>
                        <p class="mb-1 text-gray-300"><strong>Created by:</strong> {{ $content->user->username ?? 'Unknown' }}</p>
                        <p>Type {{ $content['type'] }}</p>
                        <p>Constellation {{ $content['constellation'] }}</p>
                        <p>Created at {{ $content['created_at'] }}</p>
                    </li>
                </a>
            @endforeach
                <div class="mt-4">
                    {{ $contents->links() }}
                </div>
        </div>
    </x-slot>
</x-app-layout>
