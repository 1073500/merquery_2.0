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
        <div class="m-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($contents as $content)
                <a href="{{ route('contents.show', $content) }}" class="transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-md hover:border-blue-600 p-5 flex flex-col justify-between">
                        <h2 class="text-xl font-semibold text-blue-400 mb-3">{{ $content['title'] }}</h2>

                        <div class="text-gray-300 mb-3 space-y-1">
                            <p><strong>Created by:</strong> {{ $content->user->username ?? 'Unknown' }}</p>
                            <p><strong>Type:</strong> {{ $content['type'] }}</p>
                            <p><strong>Name:</strong> {{ $content['name'] }}</p>
                            <p><strong>Country:</strong> {{ $content['country'] }}</p>
                            <p><strong>Created at:</strong> {{ $content['created_at']->format('d M Y H:i') }}</p>
                        </div>

                        <div class="mt-auto">
                            <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition-colors">View Details</span>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="col-span-full mt-4">
                {{ $contents->links() }}
            </div>
        </div>
    </x-slot>

</x-app-layout>
