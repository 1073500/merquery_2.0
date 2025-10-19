<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Home page</h1>
        </div>
        <div>
            <div
                class="bg-gray-900 p-2 m-6 rounded-full inline-flex items-center px-6 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                <button>Blog</button>
            </div>
            <div
                class="bg-white p-2 m-6 rounded-full inline-flex items-center px-6 text-sm font-medium leading-5 text-black hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                <button>Discover</button>
            </div>
        </div>
        <div class="flex justify-center items-center m-8">

            <div class="relative inline-flex group w-96 h-4">
                <div
                    class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-sky-300 to-rose-300 via-violet-300 rounded-full blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-pulse">
                </div>
                <input
                    placeholder="Search..."
                    class="relative w-full inline-flex items-center justify-center px-4 py-4 text-base  text-[#001155] transition-all duration-200 bg-white font-pj rounded-full focus:outline-none outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#001155]/opacity-70"
                />
            </div>
        </div>
    </x-slot>
    <x-slot name="section"><h1>Hello Merquery homepage!</h1></x-slot>
</x-app-layout>
