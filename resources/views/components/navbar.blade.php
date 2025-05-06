<nav class="w-full flex justify-between items-center text-white bg-black/50 fixed z-50" style="box-shadow: 0 0 10px black">
    <div class="w-15 ml-5">
        <img class="" src="{{ asset('images/icon/logo.png') }}" alt="">
    </div>
    <div class="flex gap-10">
        <a href="{{ route('homepage', ['username' => $username, 'password' => $password]) }}" class="p-6 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Home</a>
        <a href="" class="p-6 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Genres</a>
        <a href="" class="p-6 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Types</a>
        <a href="" class="p-6 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Music</a>
        <a href="" class="p-6 hover:bg-[#ff0000c9] transition-all duration-200 text-lg">Videos</a>
    </div>
    <div class="relative w-31 group p-3 cursor-pointer">
        <div class="w-12 h-12 mx-auto rounded-full overflow-hidden bg-amber-400">
            <img class="object-cover" src="{{ asset('images/avatars/yuna.jpg') }}" alt="">
        </div>
        <div class="absolute right-0 mt-3 w-full flex flex-col bg-[#292b36] text-white rounded shadow-md opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-1 invisible group-hover:visible transition-all duration-200 z-10">
            <a href="{{ route('profile', ['username' => $username, 'password' => $password]) }}" class="py-4 px-6 hover:bg-[#ff0000c9]">Profile</a>
            <a href="{{ route('dashboard', ['username' => $username, 'password' => $password]) }}" class="py-4 px-6 hover:bg-[#ff0000c9]">Dashboard</a>
            <a href="" class="py-4 px-6 hover:bg-[#ff0000c9]">Settings</a>
            <a href="" class="py-4 px-6 hover:bg-[#ff0000c9]">Logout</a>
        </div>
    </div>
</nav>
