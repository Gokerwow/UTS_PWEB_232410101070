<aside class="w-70 bg-[#1d1d1d] text-white shadow-md md:block h-screen fixed">
    <div class="h-full flex flex-col">
        <div class="flex pl-10 items-center py-6 ">
            <img class="w-2/5 cursor-pointer" src="{{ asset('images/icon/logo.png') }}" alt="">
            <div>
                <div class="text-2xl font-bold text-white">ZUNO</div>
                <div class="text-xs text-white">Management</div>
            </div>
        </div>
        <nav class="flex flex-col gap-3">
            <div class="flex items-center px-4 py-2 gap-5 cursor-pointer hover:bg-[#ff0000c9]">
                <img class="w-5 h-5" src="{{ asset('images/icon/dashboardICON.png') }}" alt="">
                <a href="{{ route('dashboard', ['username' => $username, 'password' => $password]) }}" class="block py-2.5 rounded">Dashboard</a>
            </div>
            <div class="flex items-center px-4 py-2 gap-5 cursor-pointer hover:bg-[#ff0000c9]">
                <img class="w-5 h-5" src="{{ asset('images/icon/usersICON.png') }}" alt="">
                <a href="#" class="block py-2.5 rounded">Users</a>
            </div>
            <div class="flex items-center px-4 py-2 gap-5 cursor-pointer hover:bg-[#ff0000c9]">
                <img class="w-5 h-5" src="{{ asset('images/icon/manageICON.png') }}" alt="">
                <a href="{{ route('pengelolaan', ['username' => $username, 'password' => $password]) }}" class="block py-2.5 rounded">Content</a>
            </div>
            <div class="flex items-center px-4 py-2 gap-5 cursor-pointer hover:bg-[#ff0000c9]">
                <img class="w-5 h-5" src="{{ asset('images/icon/subsICON.png') }}" alt="">
                <a href="#" class="block py-2.5 rounded">Subscription</a>
            </div>
            <div class="flex items-center px-4 py-2 gap-5 cursor-pointer hover:bg-[#ff0000c9]">
                <img class="w-5 h-5" src="{{ asset('images/icon/notificationsICON.png') }}" alt="">
                <a href="#" class="block py-2.5 rounded">Notifications</a>
            </div>
        </nav>
    </div>

    <nav class="absolute bottom-0 left-0 w-full">
        <div class="relative group">
            <div class="absolute right-0 bottom-full mb-2 w-full bg-white text-black rounded shadow-md opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-1 invisible group-hover:visible transition-all duration-200 z-10">
                <a href="{{ route('profile', ['username' => $username, 'password' => $password]) }}" class="block px-4 rounded py-2 hover:bg-[#ff0000c9] hover:text-white">Profile</a>
                <a href="#" class="block px-4 rounded py-2 hover:bg-[#ff0000c9] hover:text-white">Change Account</a>
            </div>
            <div class="flex items-center gap-3 rounded-2xl p-3 text-white hover:bg-[#ff0000c9] cursor-pointer">
                <img src="{{ asset('images/background/yuna3.jpg') }}" alt="Avatar" class="w-10 h-10 rounded-full" />
                <div>
                    <div class="font-semibold">{{ $username }}</div>
                    <div class="text-sm text-gray-300">Admin Manager</div>
                </div>
                <img class="ml-auto w-6 h-6" src="{{ asset('images/icon/chevronUpICON.png') }}" alt="">
            </div>
        </div>
        <div class="flex items-center px-4 py-2 cursor-pointer gap-5 hover:bg-[#ff0000c9]">
            <img class="w-5 h-5" src="{{ asset('images/icon/settingsICON.png') }}" alt="">
            <a href="#" class="block py-2.5 rounded">Settings</a>
        </div>
        <div class="flex items-center px-4 py-2 cursor-pointer gap-5 hover:bg-[#ff0000c9] mb-4">
            <img class="w-5 h-5" src="{{ asset('images/icon/logoutICON.png') }}" alt="">
            <a href="#" class="block py-2.5 rounded">Logout</a>
        </div>
    </nav>
</aside>
