@extends('layouts.dashboardLayout')

@section('content')
<section class="grid grid-cols-4 gap-10 ">
    <div class="bg-[#12131a] rounded-xl p-6 h-40 flex flex-col justify-between shadow-lg">
        <div class="flex items-center gap-3">
            <div class="bg-blue-500 p-2 rounded-lg">
                <img class="w-5 h-5" src="{{ asset('images/icon/usersICON.png') }}" alt="">
            </div>
            <p class="text-gray-300">Total Customers</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold">567,890</p>
            <div class="flex items-center gap-1 text-green-500">
                <img class="w-5 h-5" src="{{ asset('images/icon/graphUpICON.png') }}" alt="">
                <span>+12.5%</span>
            </div>
        </div>
        <p class="text-sm text-gray-400">Compared to last month</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-[#12131a] rounded-xl p-6 h-40 flex flex-col justify-between shadow-lg">
        <div class="flex items-center gap-3">
            <div class="bg-purple-500 p-2 rounded-lg">
                <img class="w-5 h-5" src="{{ asset('images/icon/subsICON.png') }}" alt="">
            </div>
            <p class="text-gray-300">Active Subscriptions</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold">324,451</p>
            <div class="flex items-center gap-1 text-green-500">
                <img class="w-5 h-5" src="{{ asset('images/icon/graphUpICON.png') }}" alt="">
                <span>+8.3%</span>
            </div>
        </div>
        <p class="text-sm text-gray-400">Increased since last week</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#12131a] rounded-xl p-6 h-40 flex flex-col justify-between shadow-lg">
        <div class="flex items-center gap-3">
            <div class="bg-green-500 p-2 rounded-lg">
                <img class="w-5 h-5" src="{{ asset('images/icon/manageICON.png') }}" alt="">
            </div>
            <p class="text-gray-300">Total Revenue</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold">Rp3.000.000</p>
            <div class="flex items-center gap-1 text-green-500">
                <img class="w-5 h-5" src="{{ asset('images/icon/graphUpICON.png') }}" alt="">
                <span>+15.2%</span>
            </div>
        </div>
        <p class="text-sm text-gray-400">Total earnings this quarter</p>
    </div>

    <!-- Card 4 -->
    <div class="bg-[#12131a] rounded-xl p-6 h-40 flex flex-col justify-between shadow-lg">
        <div class="flex items-center gap-3">
            <div class="bg-red-500 p-2 rounded-lg">
                <img class="w-5 h-5" src="{{ asset('images/icon/notificationsICON.png') }}" alt="">
            </div>
            <p class="text-gray-300">New Notifications</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold">128</p>
            <div class="flex items-center gap-1 text-red-500">
                <img class="w-5 h-5 rotate-180" src="{{ asset('images/icon/graphUpICON.png') }}" alt="">
                <span>-3.8%</span>
            </div>
        </div>
        <p class="text-sm text-gray-400">Down from yesterday</p>
    </div>
</section>

<section class="grid grid-cols-12 gap-5">
    <table class="col-span-7 bg-[#12131a] rounded-2xl ">
        <thead>
            <tr>
                <th class="px-4 py-3 text-start">Content</th>
                <th class="px-4 py-3 text-start">Types</th>
                <th class="px-4 py-3 text-start">Genres</th>
                <th class="px-4 py-3 text-start">Views</th>
                <th class="px-4 py-3 text-start">Likes</th>
                <th class="px-4 py-3 text-start">Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach(array_slice($streamingData, 0, 3) as $streamItem)
                <tr class="border-b border-gray-700 ">
                    <td class="px-4 py-3 flex flex-col gap-3">
                        <div class="w-full aspect-video overflow-hidden">
                            <img class="" src="{{ asset($streamItem['thumbnail']) }}" alt="">
                        </div>
                        <p class="text-center font-bold">{{ $streamItem['title'] }}</p>
                        <div class="flex items-center gap-3">
                            <p class="text-xs text-gray-300 text-wrap">Uploaded by</p>
                            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center">BY</div>
                            <div>
                                <p class="font-medium">Brili Pacar Yuna</p>
                                <p class="text-xs text-gray-400">brilipacaryuna@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <span class="">{{ $streamItem['types'] }}</span>
                    </td>
                    <td class="px-4 py-3">
                        <p class="">{{ implode(', ', $streamItem['genres']) }}</p>
                    </td>
                    <td class="px-4 py-3"><p>{{ $streamItem['views'] }}</p></td>
                    <td class="px-4 py-3"><p>{{ $streamItem['likes'] }}</p></td>
                    <td class="px-4 py-3 text-sm">{{ $streamItem['comments'] }} <p class="text-gray-400 cursor-pointer whitespace-nowrap">View Comments</p></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6" class="px-4 py-3 text-center">
                    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="text-blue-400 hover:underline">View More</a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="col-span-5 bg-[#12131a] rounded-xl px-4 py-3">
        <h1 class="font-bold">Recent Activities</h1>
        <table>
            <thead>
                <tr>
                    <th class="py-3">User</th>
                    <th class="pl-4 py-3">Activities</th>
                    <th class="pl-4 py-3">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentActivities as $activity)
                    <tr>
                        <td class="py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-ful flex items-center justify-center">
                                    <img class="w-full h-full object-cover rounded-full" src="{{ asset($activity['avatar']) }}" alt="">
                                </div>
                                <div>
                                    <p class="font-medium">{{ $activity['username'] }}</p>
                                    <p class="text-xs text-gray-400">{{ $activity['user_email'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="pl-4 py-3">
                            <p class="text-sm">{{ $activity['activity_type'] }} a <span class="font-bold">{{ $activity['content_type'] }}</span> Titled <span class="font-bold">{{ $activity['content_title'] }}</span></p>
                        </td>
                        <td class="pl-4 py-3">
                            <p class="text-sm whitespace-nowrap">{{ $activity['timestamp'] }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
