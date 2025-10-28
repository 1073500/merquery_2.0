<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Content Details Page</h1>
        </div>
    </x-slot>
    <x-slot name="Content" class="">
        <div class="m-2 p-2 bg-gray-900 border border-gray-800 rounded-lg">
            <h2 class="text-xl font-bold mb-2 ">{{ $content['title'] }}</h2>
            <p class="mb-1 text-gray-300"><strong>Constellation:</strong> {{ $content['constellation'] }}</p>
            <p class="mb-1 text-gray-300"><strong>Description:</strong> {{ $content['description'] }}</p>
            <p class="mb-1 text-gray-300"><strong>Created at:</strong> {{ $content['created_at'] }}</p>
            <div class="">
                <a class="bg-gray-950 hover:bg-blue-600 text-white rounded-lg px-4 py-1 transition" href="/contents/{{ $content->id }}/edit">Edit</a>
                <a class="bg-red-700 hover:bg-blue-600 text-white rounded-lg px-4 py-1 transition" href="/contents/{{ $content->id }}">Delete</a>
            </div>
        </div>
    </x-slot>
</x-app-layout>
