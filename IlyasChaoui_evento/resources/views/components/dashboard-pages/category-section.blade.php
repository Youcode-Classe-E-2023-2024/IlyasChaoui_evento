<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="space-y-2 text-center">
        <h2 class="text-3xl mt-20 text-white dark:text-dark font-bold">All Categories</h2>
        <p class="font-serif text-sm text-gray-800 dark:text-white">Here you can add and see all categories.</p>
    </div>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex  flex-col justify-between lg:flex-row">

            <x-forms.category-form />

            <x-tables.category-table :data="$data" />
        </div>
    </div>
</main>
