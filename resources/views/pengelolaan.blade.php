@extends('layouts.dashboardLayout')

@section('content')
<section class="grid grid-cols-12 gap-5">
    <table class="col-span-12 bg-[#12131a] rounded-2xl ">
        <thead>
            <tr>
                <th class="px-4 py-3 text-center">Content</th>
                <th class="px-4 py-3 text-start">Types</th>
                <th class="px-4 py-3 text-start">Genres</th>
                <th class="px-4 py-3 text-start">Views</th>
                <th class="px-4 py-3 text-start">Likes</th>
                <th class="px-4 py-3 text-start">Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($streamingData as $streamItem)
                <tr class="border-b border-gray-700">
                    <td class="px-4 py-3 flex flex-col gap-3 items-center">
                        <div class="w-100 aspect-video overflow-hidden">
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
        </tbody>
    </table>
</section>
@endsection
