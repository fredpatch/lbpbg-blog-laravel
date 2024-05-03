<footer class="flex flex-wrap items-center justify-center py-4 space-x-4 text-sm border-t border-gray-100 ">
    <a class="text-gray-500 hover:text-yellow-500" href="{{ route('login') }}">{{ __('menu.footer.login') }}</a>
    <a class="text-gray-500 hover:text-yellow-500" href="{{ route('profile.show') }}">{{ __('menu.profile') }}</a>
    <a class="text-gray-500 hover:text-yellow-500" href="{{ route('posts.index') }}">{{ __('menu.footer.blog') }}</a>
</footer>
