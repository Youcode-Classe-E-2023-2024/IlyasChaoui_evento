<div class="container">
    <div class="flex flex-wrap">
        <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0">
            <div
                class="relative z-0 flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 border-0 shadow-soft-xl text-black dark:text-white rounded-2xl bg-clip-border">
                <div
                    class="border-b shadow-none dark:border-white/40  p-6 mb-0 text-center bg-white dark:bg-slate-850 border-b-1 rounded-t-2xl">
                    <h5 class="text-xl text-black dark:text-white">Add Category Form</h5>
                </div>
                <div class="flex-auto p-6">
                    <form role="form text-left" action="{{ route('add.category') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <input type="text"
                                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white dark:bg-gray-700 bg-clip-padding py-2 px-3 font-normal text-gray-700 dark:text-white transition-all focus:border-fuchsia-300  focus:text-gray-700 focus:outline-none focus:transition-shadow dark:border-gray-700 dark:focus:border-fuchsia-300 dark:focus:bg-dark dark:focus:text-white"
                                name="categoryName" placeholder="Name" aria-label="Name"
                                aria-describedby="email-addon" />
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit"
                                class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white dark:hover:border-fuchsia-300 dark:hover:bg-dark dark:hover:text-white">
                                ADD A CATEGORY
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
