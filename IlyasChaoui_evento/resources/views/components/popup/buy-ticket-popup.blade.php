<button type="submit" value="Buy a Ticket" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
    class="mb-4 h-[50px] w-full cursor-pointer rounded-md bg-secondary text-center text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-[#0BB489] hover:bg-opacity-90">Buy
    a Ticket</button>
<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center rounded-lg items-center w-full md:inset-0  max-h-1/2">
    <div class="bg-white rounded-lg">
        <div class="absolute left-20">
            <button type="button"
                class="text-gray-400 bg-transparent absolute right-0 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="crud-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div id="login" class="p-4 flex flex-col justify-center max-w-md mx-auto">
            <div class="p-6 bg-sky-100 rounded">
                <div class="flex items-center justify-center font-black m-3 mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-3 text-red-600 animate-pulse"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="tracking-wide text-3xl text-gray-900">Reserve a Ticket
                    </h1>
                </div>
                <form action="{{ route('reserve.ticket') }}" method="post" id="login_form" action="api_login"
                    method="POST" class="flex flex-col justify-center">
                    @csrf
                    <input type="hidden" name="eventId" value="{{ $event->id }}">
                    <input type="hidden" name="acceptation" value="{{ $event->acceptation }}">
                    <input
                        class="mb-3 px-2 py-1.5
                                                        mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                                                        focus:outline-none
                                                        focus:border-sky-500
                                                        focus:ring-1
                                                        focus:ring-sky-500
                                                        focus:invalid:border-red-500 focus:invalid:ring-red-500"
                        type="email" name="email" placeholder="Write you email..." required="">
                    <button
                        class="px-4 py-1.5 rounded-md shadow-lg bg-gradient-to-r from-pink-600 to-red-600 font-medium text-gray-100 block transition duration-300"
                        type="submit">

                        <span>Reserve<span id="subtotal"></span></span>
                    </button>
                </form>
            </div>
        </div>

        <script>
            document.getElementById("login_form").onsubmit = function() {
                // animation
                document.getElementById("login_process_state").classList.remove("hidden")
                document.getElementById("login_process_state").classList.add("animate-pulse")

                document.getElementById("login_default_state").classList.add("hidden")
            }

            let current_count = parseInt(document.getElementById("item_count").value)
            let subtotal = parseInt(5)

            function plus() {
                document.getElementById("item_count").value = ++current_count
                document.getElementById("subtotal").innerHTML = ` $${subtotal * document.getElementById("item_count").value}`

            }

            function minus() {
                if (current_count < 2) {
                    current_count = 1
                    document.getElementById("item_count").value = 1
                    document.getElementById("subtotal").innerHTML =
                        ` $${subtotal * document.getElementById("item_count").value}`
                } else {
                    document.getElementById("item_count").value = --current_count
                    document.getElementById("subtotal").innerHTML =
                        ` $${subtotal * document.getElementById("item_count").value}`
                }
            }
        </script>
    </div>
</div>
