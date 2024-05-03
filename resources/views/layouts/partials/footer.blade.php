<footer class="flex flex-wrap items-center justify-between px-4 py-4 text-sm border-t border-gray-100 ">
    <div class="flex space-x-4">
        @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('language', $locale) }}">
                <x-dynamic-component :component="'flag-country-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach

        {{-- <a href="{{ route('language', 'fr') }}">
            <x-flag-country-fr class="w-6 h-6" />
        </a> --}}

    </div>
    <div class="flex space-x-4">
        <a class="text-gray-500 hover:text-yellow-500" href="{{ route('login') }}">{{ __('menu.footer.login') }}</a>
        <a class="text-gray-500 hover:text-yellow-500" href="{{ route('profile.show') }}">{{ __('menu.profile') }}</a>
        <a class="text-gray-500 hover:text-yellow-500"
            href="{{ route('posts.index') }}">{{ __('menu.footer.blog') }}</a>
    </div>
</footer>
