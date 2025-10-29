<nav class=" ">
    <div class="">
        <x-menu-link class="" href="{{route('homepage')}}">Homepage</x-menu-link>
        <x-menu-link class="" href="{{ route('about') }}">About Merquery</x-menu-link>
        <x-menu-link class="" href="{{ route('contact') }}">Contact</x-menu-link>
        <x-menu-link class="" href="{{ route('contents.index') }}">All Contents</x-menu-link>
{{--        admin--}}
        @if (Auth::check() && Auth::user()->isAdmin())
        <x-menu-link class="" href="{{ route('admin.dashboard') }}">Dashboard</x-menu-link>
        @endif
        {{-- <x-menu-link class="" href="{{ route('contents.show', $content->id) }}">Details</x-menu-link> --}}

{{--        guest--}}
        @guest
            <x-menu-link class="" href="{{ route('login') }}">Login</x-menu-link>
            <x-menu-link class="" href="{{ route('register') }}">Register</x-menu-link>
        @endguest

{{--        auth--}}
        @auth
            <x-menu-link class="" href="{{ route('contents.create') }}">Create</x-menu-link>
            <x-menu-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button>Log out</button>
                </form>
            </x-menu-link>
            <p class="bg-blue-600 p-2 m-2 rounded-full inline-flex items-center px-6 text-sm font-medium leading-5 text-white '">
                Logged In</p>
        @endauth
    </div>
</nav>
