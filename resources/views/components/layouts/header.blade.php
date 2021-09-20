<header class="border-b border-gray-800">
    <nav class="container flex flex-col items-center justify-between px-4 py-6 mx-auto lg:flex-row">
        <div class="flex items-center">
            <a href="/">
                <img src="{{ asset('img/laracasts-logo.svg') }}" alt="laracasts" class="flex-none w-32">
            </a>
            <ul class="flex mt-6 ml-0 space-x-8 lg:ml-16 lg:mt-0">
                <li><a href="#" class="hover:text-gray-400">Games</a></li>
                <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
            </ul>
        </div>
        <div class="flex items-center mt-6 lg:mt-0">
            <div class="relative">
                <input type="text" class="w-64 px-3 py-1 pl-8 text-sm bg-gray-800 rounded-full focus:outline-none focus:shadow-outline" placeholder="Search..."/>
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="w-4 text-gray-400 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                </div>
            </div>
            <div class="ml-6">
                <a href="#"><img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-8 rounded-full"></a>
            </div>
        </div>
    </nav>
</header>
