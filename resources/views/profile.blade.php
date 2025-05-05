<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZUNO</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="w-full flex justify-between items-center px-10 text-white bg-black/50 fixed" style="box-shadow: 0 0 10px black">
        <div class="w-15">
            <img class="" src="{{ asset('images/icon/logo.png') }}" alt="">
        </div>
        <div class="flex gap-10">
            <a href="" class="p-5 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Home</a>
            <a href="" class="p-5 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Genres</a>
            <a href="" class="p-5 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Types</a>
            <a href="" class="p-5 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Music</a>
            <a href="" class="p-5 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Videos</a>
        </div>
        <div class="w-10 h-10 rounded-full overflow-hidden bg-amber-400">
            <img class="object-cover" src="{{ asset('images/avatars/yuna.jpg') }}" alt="">
        </div>
    </nav>

    <main class="bg-gradient-to-br from-red-700 to-black text-white px-50 py-30">
        <div class="shadow-[0_0_20px_#000]">
            <section class=" w-full h-100 overflow-hidden flex justify-center items-center rounded-t-xl">
                <img class="" src="{{ asset('images/profileBanners/banner1.jpeg') }}" alt="">
            </section>
            <section class="bg-[#292b36] pb-10 px-30 rounded-b-xl">
                <div class=" flex items-center gap-8">
                    <div class=" w-35 h-35 rounded-full overflow-hidden mt-[-70px] shadow-[0_0_0_15px_#292b36]">
                        <img class="" src="{{ asset('images/avatars/yuna.jpg') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1 class="text-4xl font-bold">Gokerwow</h1>
                        <p class="bg-gray-600 w-max px-2 py-1 rounded-lg">#animelover</p>
                    </div>
                    <div class="flex gap-5 ml-auto">
                        <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Change Photo</button>
                        <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Change Banner</button>
                    </div>
                </div>
                <div class=" mt-10 w-full flex gap-5">
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-4 ">
                            <label for="" class="text-xl font-bold">Display Name</label>
                            <div class="flex gap-5">
                                <input id="myInput" type="text" value="Gokerwow" readonly
                                    class="border w-150 px-5 py-2 rounded-lg text-white">
                                <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Edit</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="" class="text-xl font-bold">Username</label>
                            <div class="flex gap-5">
                                <input id="myInput" type="text" value="Gokerwow" readonly
                                    class="border w-150 px-5 py-2 rounded-lg text-white">
                                <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Edit</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="" class="text-xl font-bold">Password</label>
                            <div class="flex gap-5">
                                <input id="myInput" type="text" value="Gokerwow" readonly
                                    class="border w-150 px-5 py-2 rounded-lg text-white">
                                <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Edit</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="" class="text-xl font-bold">Email</label>
                            <div class="flex gap-5">
                                <input id="myInput" type="text" value="Gokerwow" readonly
                                    class="border w-150 px-5 py-2 rounded-lg text-white">
                                <button class="bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Edit</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="" class="text-xl font-bold">About Me</label>
                            <div class="flex gap-5 items-center">
                                <input id="myInput" type="text" value="Gokerwow" readonly
                                    class="border w-150 px-5 py-2 h-40 rounded-lg text-white">
                                <button class="h-13 bg-red-600 p-3 rounded-lg font-bold hover:bg-red-700 cursor-pointer">Edit</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-[50%] flex flex-col gap-5">
                        <div class="p-5 rounded-xl bg-[#252121] w-full h-100 border-2">
                            <div class="flex py-5 items-center justify-between">
                                <h1 class="text-xl font-bold ">Watch List</h1>
                                <div class="w-5 bg-white rounded cursor-pointer">
                                    <img src="{{ asset('images/icon/arrowUpRightICON.png') }}" alt="">
                                </div>
                            </div>
                            <div class="relative">
                                <div class=" relative flex gap-10 py-5 border-t-2 border-b-2 items-center overflow-x-scroll" style="-ms-overflow-style: none; scrollbar-width: none;">
                                    <img class="w-100" src="{{ asset('images/thumbnails/tobeherox.jpg') }}" alt="">
                                    <img class="w-100" src="{{ asset('images/thumbnails/tobeherox.jpg') }}" alt="">
                                    <img class="w-100" src="{{ asset('images/thumbnails/tobeherox.jpg') }}" alt="">
                                    <img class="w-100" src="{{ asset('images/thumbnails/tobeherox.jpg') }}" alt="">
                                </div>
                                <div class="">
                                    <div class=" absolute top-0 left-0 w-1/4 h-full bg-gradient-to-r from-black/50 to-transparent"></div>
                                    <div class=" absolute top-0 right-0 w-1/4 h-full bg-gradient-to-l from-black/50 to-transparent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-[#252121] w-full h-100 border-2">
                            <h1 class="text-xl font-bold py-5">Activities</h1>
                            <div class="h-72 overflow-y-auto pr-2 flex flex-col gap-3 border-y-2" style="-ms-overflow-style: none; scrollbar-width: none;">
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>Gokerwow Watched To Be Hero X</p>
                                    <p>5 minutes Ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
</body>
</html>
