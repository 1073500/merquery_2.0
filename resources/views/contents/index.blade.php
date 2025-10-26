<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Contents Page</h1>
        </div>
    </x-slot>
    <x-slot name="Content">
    @foreach($contents as $content)
        <li>
            <a href="{{ route('contents.show', $content) }}" class="hover:text-blue-500"><strong>{{ $content['title'] }}:</strong> Constellation {{ $content['constellation'] }}
            </a>
        </li>
    @endforeach
    </x-slot>
</x-app-layout>
