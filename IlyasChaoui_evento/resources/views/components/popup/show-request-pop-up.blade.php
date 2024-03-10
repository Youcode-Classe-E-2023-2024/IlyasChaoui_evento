<button type="submit" value="Buy a Ticket" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
        class="mb-4 h-[50px] w-full cursor-pointer rounded-md bg-secondary text-center text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-[#0BB489] hover:bg-opacity-90">
    Show Requests
</button>
<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center rounded-lg items-center w-full md:inset-0  max-h-1/2">
    <div class="bg-gray-200 rounded-lg">
        <div id="login" class="p-4 flex flex-col justify-center max-w-md mx-auto">
            <button type="button"
                    class="text-gray-400 bg-transparent relative right-2 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-5 h-8 ms-auto inline-flex justify-end items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 bg-sky-100 rounded">
                <div class="flex items-center justify-center font-black mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-3 text-red-600 animate-pulse"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                              clip-rule="evenodd"/>
                    </svg>
                    <h1 class="tracking-wide text-xl text-gray-900">Requests For Your Events
                    </h1>
                </div>
                @foreach($event->reservers as $reserver)

                    @if($reserver->pivot->status == 1)
                        <div class="max-w-lg mx-auto items-center">
                            <div
                                class="flex justify-between px-3 py-1 bg-white items-center gap-1 rounded-lg border border-gray-200 my-3">
                                <div
                                    class="relative w-16 h-16 rounded-full hover:bg-red-700 bg-gradient-to-r from-purple-400 via-blue-500 to-red-400 ">
                                    <div
                                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-14 h-14 bg-gray-200 rounded-full border-2 border-white">
                                        <img class="w-full h-full object-cover rounded-full"
                                             src="{{ asset($reserver->picture) }}"
                                             alt="">
                                    </div>
                                </div>
                                <div>
                                    <span class="font-mono text-black">{{ $reserver->name }}</span>
                                </div>
                                <div class="flex gap-2">
                                    <form action="{{ url('/approve/reservation/' . $reserver->pivot->id) }}" method="post">
                                        @csrf
                                        @method('patch')
                                        @foreach($event->reservations as $email)
                                        <input type="hidden" name="email" value="{{ $email->email }}">
                                        @endforeach
                                        <input type="hidden" name="reservation_id" value="{{ $reserver->pivot->id }}">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="">
                                        @csrf
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <script>
            document.getElementById("login_form").onsubmit = function () {
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
