<x-app-layout>

    <div class="grid w-full grid-cols-4 gap-10">
        <div class="col-span-4 md:col-span-3">
            <div id="posts" class="px-3 py-6 lg:px-7">
                <div class="flex items-center justify-between border-b border-gray-100">
                    <div id="filter-selector" class="flex items-center space-x-4 font-light ">
                        <button class="py-4 text-gray-500">Latest</button>
                        <button class="py-4 text-gray-900 border-b border-gray-700">Oldest</button>
                    </div>
                </div>
                <div class="py-4">
                    @foreach ($posts as $post)
                        <x-posts.post-item :post="$post" />
                    @endforeach
                </div>
            </div>
        </div>
        <div id="side-bar"
            class="sticky top-0 h-screen col-span-4 px-3 py-6 pt-10 space-y-10 border-t border-gray-100 border-t-gray-100 md:border-t-none md:col-span-1 md:px-6 md:border-l">
            <div id="search-box">
                <div>
                    <h3 class="mb-3 text-lg font-semibold text-gray-900">Search</h3>
                    <div class="flex items-center px-3 py-2 mb-3 bg-gray-100 w-52 rounded-2xl">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>
                        <input
                            class="w-40 ml-1 text-xs text-gray-800 bg-transparent border-none outline-none focus:outline-none focus:border-none focus:ring-0 placeholder:text-gray-400"
                            type="text" placeholder="Search Yelo">
                    </div>
                </div>
            </div>

            <div id="recommended-topics-box">
                <h3 class="mb-3 text-lg font-semibold text-gray-900">Recommended Topics</h3>
                <div class="flex flex-wrap justify-start topics">
                    <a href="#" class="px-3 py-1 text-base text-white bg-red-600 rounded-xl">
                        Tailwind</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
