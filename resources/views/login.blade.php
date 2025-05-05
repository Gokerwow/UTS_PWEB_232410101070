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
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi Kesalahan:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <main class="flex">
        <div class="w-1/2 h-screen bg-center bg-cover relative flex flex-col justify-center items-center" style="background-image: url('{{ asset('images/background/loginBG2.png') }}') ">
            <div class="bg-[rgba(255,255,255,0.19)] w-1/2 px-8 pt-8 pb-25 rounded-lg flex flex-col gap-5">
                <div class="flex flex-col items-center">
                    <img class="w-30" src="{{ asset('images/icon/logo.png') }}" alt="">
                    <h1 class="font-bold text-white">ZUNO</h1>
                </div>
                <h1 class="font-bold text-white">Sign In</h1>
                <form action="{{ route('login.process') }}" method="POST" class=" flex flex-col gap-5">
                    @csrf
                    <div class="flex gap-1.5 border border-white rounded p-2">
                        <img class="w-7" src="{{ asset('images/icon/usernameLOGO.png') }}" alt="">
                        <input type="text" name="username" placeholder="Enter Username" class="placeholder-white w-full text-white outline-none bg-transparent rounded">
                    </div>
                    <div class="flex gap-1.5 border border-white rounded p-2">
                        <img class="w-7" src="{{ asset('images/icon/keyICON.png') }}" alt="">
                        <input type="text" name="password" placeholder="Enter Password" class="placeholder-white w-full text-white outline-none bg-transparent rounded">
                    </div>
                    <button class="bg-white p-2 bg-gradient-to-r from-[#FF6666] via-[#FF0000] to-[#FF6666] text-white font-bold cursor-pointer" type="submit">Sign In</button>
                </form>
                <div class="">
                    <p class="text-white">Dont have an account? </p>
                    <a href="" class="font-bold text-red-500">SIGN UP</a>
                </div>
            </div>
        </div>
        <div class="line h-screen w-8 gradient-background">

        </div>
        <div class="w-1/2 h-screen bg-center bg-cover relative" style="background-image: url('{{ asset('images/background/loginBG.png') }}')">
            <div class="absolute h-full w-full bg-black opacity-20">

            </div>
        </div>
    </main>
</body>
</html>
