@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                : 'bg-gray-900 p-2 m-2 rounded-full inline-flex items-center px-6 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none focus:text-gray-700 dark:focus:text-gray-200 focus:bg-white/10 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

