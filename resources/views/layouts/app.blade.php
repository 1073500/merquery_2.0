<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 relative min-h-screen overflow-hidden">

{{--body class="bg-gray-950 bg-[url('/images/mequery-bg-6.png')] bg-cover bg-center h-screen--}}

<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<div class="min-h-full">
    <nav class="">
        @include('layouts.nav')
    </nav>

    <header class=" text-white">
        <div class=" m-16 text-4xl font-bold text-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="">@isset($heading)
                    {{$heading}}
                @endisset</h1>

        </div>
    </header>

    <main>
        <div class=" text-white mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Slotted content -->
            <div class="text-center">
                @isset($title)
                    <h1>{{$title}}</h1>
                @endisset
            </div>
            @isset($create)
                <h1>{{$create}}</h1>
            @endisset
        </div>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</div>
</body>
