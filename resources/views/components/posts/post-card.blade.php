@props(['post'])
<div class="">
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="#" class="px-3 py-1 mr-3 text-sm text-white bg-red-600 rounded-xl">
                Laravel
            </a>
            <p class="text-sm text-gray-500">{{ $post->published_at }}</p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
