<x-app-layout>
    <x-slot name="heading">
        <div class="m-2">
            <h1>Home page</h1>
        </div>
        <div>
            <div class="m-6">
                <a href="{{ route('contents.index') }}">
                <button
                    class="cursor-pointer p-3 group relative isolation-auto z-10 mx-auto flex items-center justify-center gap-2 overflow-hidden rounded-full border-2 border-white/30 dark:border-white/20 px-3 py-1 text-lg shadow-2xl backdrop-blur-xl bg-white/20 dark:bg-black/20 before:absolute before:-left-full before:-z-10 before:aspect-square before:w-full before:rounded-full before:bg-blue-600 dark:before:bg-blue-600 before:transition-all before:duration-700 text-gray-800 dark:text-gray-100 hover:text-white dark:hover:text-white hover:before:left-0 hover:before:w-full hover:before:scale-150 hover:before:duration-700 lg:font-semibold transition-all duration-300 hover:bg-white/10 dark:hover:bg-black/10">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 512 512"
                        class="rotate-45 justify-end rounded-full p-1 duration-300 ease-linear group-hover:rotate-90 group-hover:border-none"
                        height="40"
                        width="40"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm80.09 224L272 208.42V358h-32V208.42L175.91 272l-22.54-22.7L256 147.46 358.63 249.3z"
                        ></path>
                    </svg>
                    See Content
                </button>
                </a>
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
