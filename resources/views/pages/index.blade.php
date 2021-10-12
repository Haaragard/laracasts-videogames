<x-layouts.app>
    <div class="container px-4 mx-auto">
        <h2 class="font-semibold tracking-wide text-blue-500 uppercase">{{ __('Popular Games') }}</h2>

        <div class="grid grid-cols-1 gap-12 pb-16 text-sm border-b border-gray-800 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6">

            @foreach ($popularGames as $game)
            <div class="flex flex-col items-center mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="flex items-center justify-center w-full h-full text-xs font-semibold">80%</div>
                    </div>
                </div>
                <a href="#" class="block mt-8 text-base font-semibold leading-tight hover:text-gray-400">
                    {{ $game['name'] }}
                </a>
                <div class="mt-1 text-gray-400">
                    @foreach ($game['platforms'] as $platform)
                    @if (array_key_exists('abbreviation', $platform))
                        {{ $platform['abbreviation'] }}
                    @else
                        {{ $platform['name'] }}
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="flex flex-col my-10 lg:flex-row">
            <div class="w-full mr-0 lg:w-3/4 lg:mr-32">
                <h2 class="font-semibold tracking-wide text-blue-500 uppercase">{{ __('Recently Reviewed') }}</h2>

                <div class="mt-8 space-y-12">
                    <div class="flex p-6 bg-gray-800 rounded-lg shadow-md">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('img/ff7.jpg') }}" alt="game cover" class="w-48 transition duration-150 ease-in-out hover:opacity-75">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                <div class="flex items-center justify-center w-full h-full text-xs font-semibold">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block mt-4 text-lg font-semibold leading-tight hover:text-gray-400">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="mt-1 text-gray-400">Playstation 4</div>
                            <p class="hidden mt-6 text-gray-400 lg:block">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur perferendis, aspernatur impedit error necessitatibus earum alias nesciunt nihil harum inventore laboriosam accusamus vitae obcaecati odit voluptatum vel. Quisquam, dolores ducimus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 lg:w-1/4 lg:mt-0">
                <h2 class="font-semibold tracking-wide text-blue-500 uppercase">{{ __('Most Anticipated') }}</h2>

                <div class="mt-8 space-y-10">
                    <div class="flex">
                        <a href="#">
                            <img src="{{ asset('img/ff7.jpg') }}" alt="game cover" class="w-16 transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Final Fantasy 7 Remake</a>
                            <div class="mt-1 text-sm text-gray-400">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
