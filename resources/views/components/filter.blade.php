<div>
    <x-input-label class="hidden" for="filter">Filter</x-input-label>
    <div class="flex items-start">
        <p class=""><strong>Filter:</strong></p>
        <form action="{{ route('contents.index') }}" method="GET">
            <input
                type="hidden"
                class="border border-gray-700 bg-gray-900 p-2 m-2 rounded-full inline-flex items-start px-6 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none"
                name="sort"
                value="created_at_desc">
            <button type="submit"
                class="border border-gray-700 bg-gray-900 p-2 m-2 rounded-full inline-flex items-start px-6 text-sm font-medium leading-5 text-gray-500 hover:border-blue-600 hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                Newest first
            </button>
        </form>

        <form action="{{ route('contents.index') }}" method="GET">
            <input
                type="hidden"
                class="border border-gray-700 bg-gray-900 p-2 m-2 rounded-full inline-flex items-start px-6 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none"
                name="sort"
                value="created_at_asc">
            <button type="submit"
                    class="border border-gray-700 bg-gray-900 p-2 m-2 rounded-full inline-flex items-start px-6 text-sm font-medium leading-5 text-gray-500 hover:border-blue-600 hover:text-gray-700 hover:duration-300 ease-in hover:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                Oldest first
            </button>
        </form>


        <a href="{{ route('contents.index') }}" class="border border-blue-600 bg-g p-2 m-2 rounded-full inline-flex items-center px-6 text-sm font-medium leading-5 text-gray-500 hover:text-white hover:duration-300 ease-in hover:bg-blue-600 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">Remove filters</a>
    </div>
</div>

