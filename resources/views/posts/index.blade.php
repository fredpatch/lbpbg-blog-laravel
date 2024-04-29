<x-app-layout>

    <div class="grid w-full grid-cols-4 gap-10">
        <div class="col-span-4 md:col-span-3">
            {{-- Post list view component --}}
            <livewire:post-list />
        </div>
        <div id="side-bar"
            class="sticky top-0 h-screen col-span-4 px-3 py-6 pt-10 space-y-10 border-t border-gray-100 border-t-gray-100 md:border-t-none md:col-span-1 md:px-6 md:border-l">
            {{-- Search box view component --}}
            <livewire:search-box />

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
