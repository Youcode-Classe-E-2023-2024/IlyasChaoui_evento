<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="space-y-2 text-center">
        <h2 class="text-3xl mt-20 text-white dark:text-dark font-bold">All Events</h2>
        <p class="font-serif text-sm text-gray-600 dark:text-gray-400">Here you can add and see all rss.</p>
    </div>
    <div class="w-full px-6 py-6 mx-auto">
        <!-- component -->
        <!-- Create By Joker Banny -->
        @if($data['eventCount'] == 0)
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('./assets/img/emty-items.png') }}" class="w-[500px]" alt="">
                <p class="text-xl font-bold absolute bottom-8 text-gray-500 dark:text-white">Oops...No Event Request Find</p>
            </div>
        @else
            <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
                <x-cards.event-dashboard-cards :data="$data"/>
            </div>
        @endif
    </div>
</main>
