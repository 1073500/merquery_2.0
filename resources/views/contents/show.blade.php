<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Content Details Page</h1>
        </div>
    </x-slot>
    <x-slot name="Content">
        <div class="m-2 p-2 border rounded">
            <h2 class="text-xl font-bold mb-2">{{ $content['title'] }}</h2>
            <p class="mb-1"><strong>Constellation:</strong> {{ $content['constellation'] }}</p>
            <p class="mb-1"><strong>Description:</strong> {{ $content['description'] }}</p>
            <p class="mb-1"><strong>Created At:</strong> {{ $content['created_at'] }}</p>
        </div>
    </x-slot>
</x-app-layout>
