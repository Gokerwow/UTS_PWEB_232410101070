<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <x-sidebar :username="$username" :password="$password"/>

    <div class="w-full h-auto flex">
        <main class="ml-70 px-10 py-5 flex flex-col gap-5 w-full h-full bg-[#2e3139] text-white">
            <section class=" flex items-center justify-between">
                <div>
                    @foreach($pageTitles as $title => $description)
                        @if($pageTitle == $title)
                            <h1 class="font-bold text-2xl">{{ $title }}</h1>
                            <p>{{ $description }}</p>
                            @break
                        @endif
                    @endforeach
                </div>

                <div class="flex items-center bg-[#12131a] px-4 py-2 gap-3 w-150 rounded-full shadow-[0_0_8px_white]">
                    <img class="w-5 h-5 opacity-70" src="{{ asset('images/icon/searchICON.png') }}" alt="Search">
                    <input
                        type="text"
                        placeholder="Search something..."
                        class="w-full bg-transparent text-white placeholder-white placeholder-opacity-50 outline-none text-sm"
                    >
                    <button class="bg-[#1e1f25] text-white font-semibold px-4 py-1 rounded-full shadow-[0_0_5px_white] text-sm">
                        Search
                    </button>
                </div>


                <!-- Dropdown -->
                <div class="relative group">
                    <!-- Button -->
                    <button class="flex items-center gap-2 px-4 py-2 bg-[#12131a] text-white rounded-md">
                        <span>All</span>
                        <img class="w-3 h-3" src="{{ asset('images/icon/chevronDownICON.png') }}" alt="">
                    </button>

                    <!-- Dropdown menu -->
                    <div class="absolute right-0 mt-2 w-32 bg-white text-black rounded shadow-md opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-1 invisible group-hover:visible transition-all duration-200 z-10">
                        <a href="#" class="block px-4 py-2 hover:bg-amber-100">Yearly</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-100">Monthly</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-100">Daily</a>
                    </div>
                </div>
            </section>

            @yield('content')
        </main>
    </div>
</body>
</html>
