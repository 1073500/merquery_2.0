<nav class=" ">
    <div class="">
        <x-menu-link class=""
                     href="{{route('homepage')}}">Homepage
        </x-menu-link>
        <x-menu-link class="" href="{{ route('about') }}">About Merquery</x-menu-link>
        <x-menu-link class="" href="{{ route('contact') }}">Contact</x-menu-link>
        <x-menu-link class="" href="{{ route('contents.index') }}">All Contents</x-menu-link>
        {{-- <x-menu-link class="" href="{{ route('contents.show', $content->id) }}">Details</x-menu-link> --}}
        <x-menu-link class="" href="{{ route('contents.create') }}">Create</x-menu-link>
    </div>
</nav>
