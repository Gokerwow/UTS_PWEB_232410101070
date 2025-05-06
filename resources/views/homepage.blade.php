@extends('layouts.main')

@section('content')
<div class="w-full">
    <section class="relative w-full h-[70%] bg-cover bg-center" style="background-image: url('{{ asset('images/thumbnails/tobeherox.jpg') }}');">
        <div class="absolute z-0 bg-gradient-to-r from-black to-transparent w-full h-full">
        </div>
        <div class="relative z-10 py-40 px-40 h-full w-full">
            <div class="h-full w-full">
                <div class="h-full w-1/2 flex flex-col gap-5 text-white justify-center">
                    <h1 class="text-3xl font-bold">To Be Hero X</h1>
                    <p class="text-lg">Anime | 112 Minutes | Fantasy Hero Action</p>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/icon/starICON.png') }}" alt="">
                        <div>
                            <span class="text-4xl font-bold">9/5</span>
                            <span class="text-lg">/10</span>
                        </div>
                        <img class="w-20" src="{{ asset('images/icon/imdbLOGO.png') }}" alt="">
                    </div>
                    <p class="text-lg">The story of To Be Hero X is set in a world where “faith” turns people into super heroes, i.e. if people believe that someone can fly, then that person gains the ability to fly. Conversely, heroes lose their powers if people stop believing in them.</p>
                    <div class="flex items-center gap-5">
                        <button class="bg-red-600 w-50 h-15 rounded-2xl font-bold text-xl cursor-pointer hover:bg-red-800">Watch Now</button>
                        <img class="w-15 cursor-pointer hover:scale-120" src="{{ asset('images/icon/saveICON.png') }}" alt="">
                    </div>
                </div>
                <div class="relative mt-6 w-1/2">
                    <img id="hero-chevron-left" class="absolute translate-y-[-50%] top-1/2 left-0 z-10 w-8 cursor-pointer" src="{{ asset('images/icon/chevronLeftICON.png') }}" alt="">
                    <div id="hero-carousel" class="relative flex gap-10 items-center overflow-x-scroll bg-black/20" style="-ms-overflow-style: none; scrollbar-width: none;">
                        @foreach($streamingData as $streamItem)
                            <div class="relative w-56 aspect-video overflow-hidden cursor-pointer flex-shrink-0">
                                <img src="{{ asset($streamItem['thumbnail']) }}" alt="">
                                <div class="absolute top-0 left-0 flex justify-center items-center w-full h-full bg-black/50 opacity-0 hover:opacity-100">
                                    <h1 class="text-xl font-bold text-white">{{ $streamItem['title'] }}</h1>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <img id="hero-chevron-right" class="absolute translate-y-[-50%] top-1/2 right-0 z-10 w-8 cursor-pointer" src="{{ asset('images/icon/chevronRightICON.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="w-full py-10">
        <div class="relative h-[30%] px-40">
            <h1 class="text-white text-3xl font-bold py-5 relative z-10">Trending Now</h1>
            <div class="relative flex flex-col justify-center w-full h-full">
                <img id="trend-chevron-left" class="hidden absolute translate-y-[-50%] top-1/2 left-0 z-10 w-8 cursor-pointer" src="{{ asset('images/icon/chevronLeftICON.png') }}" alt="">
                <div id="trend-div" class="relative flex gap-10 items-center overflow-x-scroll" style="-ms-overflow-style: none; scrollbar-width: none;">
                    @foreach($streamingData as $streamItem)
                        <div class="relative w-100 aspect-video cursor-pointer flex-shrink-0 overflow-hidden">
                            <img src="{{ asset($streamItem['thumbnail']) }}" alt="">
                            <div class="absolute top-0 left-0 flex justify-center items-center w-full h-full bg-black/50 opacity-0 hover:opacity-100">
                                <h1 class="text-xl font-bold text-white">{{ $streamItem['title'] }}</h1>
                            </div>
                        </div>
                    @endforeach
                </div>
                <img id="trend-chevron-right" class="absolute translate-y-[-50%] top-1/2 right-0 z-10 w-8 cursor-pointer" src="{{ asset('images/icon/chevronRightICON.png') }}" alt="">
            </div>
        </div>
    </section>
</div>
@endsection
