    <div
        class="md:px-4 md:grid text-black dark:bg-dark dark:text-white md:grid-cols-2 lg:grid-cols-4 gap-5 space-y-4 md:space-y-0">
        @foreach ($events as $event)
            <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                <div
                    class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                    <h3 class="mb-3 text-xl font-bold text-indigo-600">{{ $event->category->name }}</h3>
                    <div class="relative">
                        @foreach ($event->getMedia() as $mediaItem)
                            <img class="w-full rounded-xl" src="{{ $mediaItem->getUrl() }}" alt="Colors" />
                        @endforeach
                        <p
                            class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                            {{ $event->price }}</p>
                    </div>
                    <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $event->title }}</h1>
                    <div class="my-4">
                        <div class="flex space-x-1 items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <div class="countdown-timer" data-deadline="{{ $event->deadline }}"></div>
                        </div>
                        <div class="flex space-x-1 items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <p>({{ $event->reservations->count() }}/{{ $event->place_number }})</p>
                        </div>
                        <div class="flex space-x-1 items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </span>
                            <p>{{ $event->city->City }}</p>
                        </div>
                        <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}"
                            class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">
                            Buy
                        </a>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const countdownElements = document.querySelectorAll('.countdown-timer');

                    countdownElements.forEach(element => {
                        const deadline = new Date(element.getAttribute('data-deadline')).getTime();

                        const interval = setInterval(() => {
                            const now = new Date().getTime();
                            const distance = deadline - now;

                            if (distance < 0) {
                                clearInterval(interval);
                                element.innerHTML = "Event has ended";
                                return;
                            }

                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            element.innerHTML = days + "d " + hours + "h " +
                                minutes + "m " + seconds + "s ";
                        }, 1000);
                    });
                });
            </script>
        @endforeach
    </div>
