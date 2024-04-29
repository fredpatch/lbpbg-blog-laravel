@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="grid items-start grid-cols-12 gap-3 mt-5 article-body">
        <div class="flex items-center col-span-4 article-thumbnail">
            <a href="">
                <img class="mx-auto mw-100 rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">
                <img class="mr-3 rounded-full w-7 h-7" src="{{ $post->author->profile_photo_url }}"
                    alt="{{ $post->author->name }}">
                <span class="mr-1 text-xs">{{ $post->author->name }}</span>
                <span class="text-xs text-gray-500">. {{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="http://127.0.0.1:8000/blog/first%20post">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {{ $post->getExcerpt() }}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">

                <div class="flex gap-x-2">

                    @foreach ($post->categories as $category)
                        <x-badge wire:navigate href="{{route('posts.index', ['category'=> $category->title])}}" :textColor="$category->text_color" :bgColor="$category->bg_color" >
                            {{ $category->title }}
                        </x-badge>
                    @endforeach

                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">{{ $post->getReadingTime() }} min read</span>
                    </div>
                </div>
                <div>
                    <a class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-gray-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <span class="ml-2 text-gray-600">
                            1
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
