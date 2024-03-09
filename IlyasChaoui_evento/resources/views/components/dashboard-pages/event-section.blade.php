<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="space-y-2 text-center">
        <h2 class="text-3xl mt-20 text-white dark:text-dark font-bold">All Events</h2>
        <p class="font-serif text-sm text-gray-600 dark:text-gray-400">Here you can add and see all rss.</p>
    </div>
    <div class="w-full px-6 py-6 mx-auto">
        <!-- component -->
        <!-- Create By Joker Banny -->
        <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0" style="height: ">
            <x-cards.event-dashboard-cards :data="$data"/>
        </div>
    </div>
</main>
