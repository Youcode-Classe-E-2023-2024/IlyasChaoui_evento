@extends('Layouts.homeLayout')
@section('title')
    {{ $category->name }}
@endsection
@section('content')
    <div class="bg-gray-200 dark:bg-dark">
        <!-- ====== Banner Section Start -->
        <div
            class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px] flex items-center justify-center">
            <div class="container mx-auto flex justify-center items-center">
                <!-- Left Line -->
                <div class="flex-1">
                    <div class="h-1 w-full bg-black dark:bg-white transition-all duration-700 ease-out" id="leftLine">
                    </div>
                </div>
                <!-- Title -->
                <h1 class="px-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2] z-10">
                    {{ $category->name }}
                </h1>
                <!-- Right Line -->
                <div class="flex-1">
                    <div class="h-1 bg-black dark:bg-white transition-all duration-700 ease-out" id="rightLine"></div>
                </div>
            </div>
        </div>
        <!-- ====== Banner Section End -->
        @if($eventCount == 0)
            <div class="flex flex-col mb-96 justify-center items-center">
                <img src="{{ asset('./assets/img/emty-items.png') }}" class="w-[500px]" alt="">
                <p class="text-xl font-bold absolute bottom-32 text-gray-500 dark:text-white">Oops...You don't have any event</p>
            </div>
        @else
            <x-cards.events-cards-category :events="$events" />
        @endif
    </div>
@endsection
