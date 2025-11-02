<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Content Details Page</h1>
        </div>
    </x-slot>
    <x-slot name="Content">
        <div class="m-4 p-6 bg-gray-900 border border-gray-800 rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300 max-w-xl mx-auto">

            <h2 class="text-2xl font-bold text-blue-400 mb-4">{{ $content['title'] }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4 text-gray-300">
                <p><strong>Name:</strong> {{ $content['name'] }}</p>
                <p><strong>Created by:</strong> {{ $content->user->username ?? 'Unknown' }}</p>
                <p><strong>Constellation:</strong> {{ $content['constellation'] }}</p>
                <p><strong>Type:</strong> {{ $content['type'] }}</p>
                <p><strong>Country:</strong> {{ $content['country'] }}</p>
                <p><strong>City:</strong> {{ $content['city'] }}</p>
                <p><strong>Town:</strong> {{ $content['town'] }}</p>
                <p><strong>Province:</strong> {{ $content['province'] }}</p>
                <p class="col-span-full"><strong>Description:</strong> {{ $content['description'] }}</p>
                <p class="col-span-full"><strong>Created at:</strong> {{ $content['created_at'] }}</p>
            </div>

            <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-2 sm:space-y-0">
                <a href="/contents/{{ $content->id }}/edit" class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg px-4 py-2 transition">Edit</a>

                <form method="POST" action="{{ route('contents.update', $content->id) }}" class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg px-4 py-2 transition">Delete</button>
                </form>
            </div>
        </div>
        <a href="{{ route('contents.index') }}" class="m-6 text-sm/6  font-semibold text-white">Go back</a>
    </x-slot>

</x-app-layout>
