<div class="card-grid sm:ml-24">
    @foreach ($events as $event)
        <div class="card flex rounded-xl w-full items-center justify-center">
            <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}">
                <div class="content max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    @if (strtotime($event->deadline) > time() && $event->reservationsCount->count() < $event->place_number)
                        <div class="bg-white dark:bg-slate-850 shadow-xl rounded-lg overflow-hidden">
                            <div class="card__background pl-5 pr-5 pt-5"
                                style="height: 200px; width: 300px; overflow: hidden;">
                                @foreach ($event->getMedia() as $mediaItem)
                                    <img class="w-full h-full object-cover rounded-xl" src="{{ $mediaItem->getUrl() }}"
                                        alt="Colors" />
                                @endforeach
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between">
                                    <p class="uppercase bg-gray-200 rounded-xl tracking-wide p-3 text-sm font-bold text-gray-700"
                                        style="width: fit-content">{{ $event->category->name }}</p>
                                    @if ($event->acceptation == 0)
                                        <p class="uppercase bg-red-600 rounded-full tracking-wide p-3 text-sm font-bold text-white"
                                            style="width: fit-content">Private</p>
                                    @else
                                        <p class="uppercase bg-yellow-200 rounded-full tracking-wide p-3 text-sm font-bold text-gray-700"
                                            style="width: fit-content">Public</p>
                                    @endif
                                </div>
                                <p class="text-3xl mt-5 mb-5 text-gray-900">{{ substr($event->title, 0, 17) }}</p>
                                <div class="flex space-x-1 items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black mb-1.5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <div class="countdown-timer text-black" data-deadline="{{ $event->deadline }}">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 border-t border-gray-300 text-gray-700">
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z" />
                                    </svg>
                                    <p><span
                                            class="text-gray-900 font-bold">({{ $event->reservationsCount->count() }}/{{ $event->place_number }})</span>
                                        Places</p>
                                </div>
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                                    </svg>
                                    <p><span class="text-gray-900 font-bold"></span>{{ $event->city->City }}</p>
                                </div>
                            </div>
                            <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                                <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                                <div class="flex justify-between items-center pt-2">
                                    <div class="rounded-full text-black mr-3">
                                        <span class="font-light">Start with:</span> <br> <span
                                            class="font-bold text-2xl">{{ $event->price }}$</span>
                                    </div>
                                    <div>
                                        <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}"
                                            class="buy-button" style="background-color: hsl(49deg 98% 60%);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36px"
                                                height="36px">
                                                <rect width="36" height="36" x="0" y="0" fill="#fdd835"></rect>
                                                <path fill="#e53935"
                                                    d="M38.67,42H11.52C11.27,40.62,11,38.57,11,36c0-5,0-11,0-11s1.44-7.39,3.22-9.59 c1.67-2.06,2.76-3.48,6.78-4.41c3-0.7,7.13-0.23,9,1c2.15,1.42,3.37,6.67,3.81,11.29c1.49-0.3,5.21,0.2,5.5,1.28 C40.89,30.29,39.48,38.31,38.67,42z">
                                                </path>
                                                <path fill="#b71c1c"
                                                    d="M39.02,42H11.99c-0.22-2.67-0.48-7.05-0.49-12.72c0.83,4.18,1.63,9.59,6.98,9.79 c3.48,0.12,8.27,0.55,9.83-2.45c1.57-3,3.72-8.95,3.51-15.62c-0.19-5.84-1.75-8.2-2.13-8.7c0.59,0.66,3.74,4.49,4.01,11.7 c0.03,0.83,0.06,1.72,0.08,2.66c4.21-0.15,5.93,1.5,6.07,2.35C40.68,33.85,39.8,38.9,39.02,42z">
                                                </path>
                                                <path fill="#212121"
                                                    d="M35,27.17c0,3.67-0.28,11.2-0.42,14.83h-2C32.72,38.42,33,30.83,33,27.17 c0-5.54-1.46-12.65-3.55-14.02c-1.65-1.08-5.49-1.48-8.23-0.85c-3.62,0.83-4.57,1.99-6.14,3.92L15,16.32 c-1.31,1.6-2.59,6.92-3,8.96v10.8c0,2.58,0.28,4.61,0.54,5.92H10.5c-0.25-1.41-0.5-3.42-0.5-5.92l0.02-11.09 c0.15-0.77,1.55-7.63,3.43-9.94l0.08-0.09c1.65-2.03,2.96-3.63,7.25-4.61c3.28-0.76,7.67-0.25,9.77,1.13 C33.79,13.6,35,22.23,35,27.17z">
                                                </path>
                                                <path fill="#01579b"
                                                    d="M17.165,17.283c5.217-0.055,9.391,0.283,9,6.011c-0.391,5.728-8.478,5.533-9.391,5.337 c-0.913-0.196-7.826-0.043-7.696-5.337C9.209,18,13.645,17.32,17.165,17.283z">
                                                </path>
                                                <path fill="#212121"
                                                    d="M40.739,37.38c-0.28,1.99-0.69,3.53-1.22,4.62h-2.43c0.25-0.19,1.13-1.11,1.67-4.9 c0.57-4-0.23-11.79-0.93-12.78c-0.4-0.4-2.63-0.8-4.37-0.89l0.1-1.99c1.04,0.05,4.53,0.31,5.71,1.49 C40.689,24.36,41.289,33.53,40.739,37.38z">
                                                </path>
                                                <path fill="#81d4fa"
                                                    d="M10.154,20.201c0.261,2.059-0.196,3.351,2.543,3.546s8.076,1.022,9.402-0.554 c1.326-1.576,1.75-4.365-0.891-5.267C19.336,17.287,12.959,16.251,10.154,20.201z">
                                                </path>
                                                <path fill="#212121"
                                                    d="M17.615,29.677c-0.502,0-0.873-0.03-1.052-0.069c-0.086-0.019-0.236-0.035-0.434-0.06 c-5.344-0.679-8.053-2.784-8.052-6.255c0.001-2.698,1.17-7.238,8.986-7.32l0.181-0.002c3.444-0.038,6.414-0.068,8.272,1.818 c1.173,1.191,1.712,3,1.647,5.53c-0.044,1.688-0.785,3.147-2.144,4.217C22.785,29.296,19.388,29.677,17.615,29.677z M17.086,17.973 c-7.006,0.074-7.008,4.023-7.008,5.321c-0.001,3.109,3.598,3.926,6.305,4.27c0.273,0.035,0.48,0.063,0.601,0.089 c0.563,0.101,4.68,0.035,6.855-1.732c0.865-0.702,1.299-1.57,1.326-2.653c0.051-1.958-0.301-3.291-1.073-4.075 c-1.262-1.281-3.834-1.255-6.825-1.222L17.086,17.973z">
                                                </path>
                                                <path fill="#e1f5fe"
                                                    d="M15.078,19.043c1.957-0.326,5.122-0.529,4.435,1.304c-0.489,1.304-7.185,2.185-7.185,0.652 C12.328,19.467,15.078,19.043,15.078,19.043z">
                                                </path>
                                            </svg>
                                            <span class="now">now!</span>
                                            <span class="play">Buy</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="bg-white dark:bg-slate-850 shadow-xl rounded-lg overflow-hidden">
                            <div class="card__background pl-5 pr-5 pt-5"
                                style="height: 200px; width: 300px; overflow: hidden;">
                                @foreach ($event->getMedia() as $mediaItem)
                                    <img class="w-full h-full object-cover rounded-xl" src="{{ $mediaItem->getUrl() }}"
                                        alt="Colors" />
                                @endforeach
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between">
                                    <p class="uppercase bg-gray-200 rounded-xl tracking-wide p-3 text-sm font-bold text-gray-700"
                                        style="width: fit-content">{{ $event->category->name }}</p>
                                    @if ($event->acceptation == 0)
                                        <p class="uppercase bg-red-600 rounded-full tracking-wide p-3 text-sm font-bold text-white"
                                            style="width: fit-content">Private</p>
                                    @else
                                        <p class="uppercase bg-yellow-200 rounded-full tracking-wide p-3 text-sm font-bold text-gray-700"
                                            style="width: fit-content">Public</p>
                                    @endif
                                </div>
                                <p class="text-3xl mt-5 mb-5 text-gray-900">{{ substr($event->title, 0, 17) }}</p>
                                <div class="flex space-x-1 items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black mb-1.5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <div class="countdown-timer text-black" data-deadline="{{ $event->deadline }}">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 border-t border-gray-300 text-gray-700">
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z" />
                                    </svg>
                                    <p><span
                                            class="text-gray-900 font-bold">({{ $event->reservationsCount->count() }}/{{ $event->place_number }})</span>
                                        Places</p>
                                </div>
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                                    </svg>
                                    <p><span class="text-gray-900 font-bold"></span>{{ $event->city->City }}</p>
                                </div>
                            </div>
                            <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                                <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                                <div class="flex justify-between items-center pt-2">
                                    <div class="rounded-full text-black mr-3">
                                        <span class="font-light">Start with:</span> <br> <span
                                            class="font-bold text-2xl">{{ $event->price }}$</span>
                                    </div>
                                    <div>

                                        <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}"
                                            class="buy-button" style="background-color: red;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"
                                                width="36px" height="36px">
                                                <rect x="6" y="6" width="36" height="36" fill-opacity="0"
                                                    fill="#fdd835"></rect>
                                                <path
                                                    d="M38.67,42h-27.15c-0.25,-1.38 -0.52,-3.43 -0.52,-6c0,-5 0,-11 0,-11c0,0 1.44,-7.39 3.22,-9.59c1.67,-2.06 2.76,-3.48 6.78,-4.41c3,-0.7 7.13,-0.23 9,1c2.15,1.42 3.37,6.67 3.81,11.29c1.49,-0.3 5.21,0.2 5.5,1.28c1.58,5.72 0.17,13.74 -0.64,17.43z"
                                                    fill="#fdd835"></path>
                                                <path
                                                    d="M39.02,42h-27.03c-0.22,-2.67 -0.48,-7.05 -0.49,-12.72c0.83,4.18 1.63,9.59 6.98,9.79c3.48,0.12 8.27,0.55 9.83,-2.45c1.57,-3 3.72,-8.95 3.51,-15.62c-0.19,-5.84 -1.75,-8.2 -2.13,-8.7c0.59,0.66 3.74,4.49 4.01,11.7c0.03,0.83 0.06,1.72 0.08,2.66c4.21,-0.15 5.93,1.5 6.07,2.35c0.83,4.84 -0.05,9.89 -0.83,12.99z"
                                                    fill="#c0a52e"></path>
                                                <path
                                                    d="M35,27.17c0,3.67 -0.28,11.2 -0.42,14.83h-2c0.14,-3.58 0.42,-11.17 0.42,-14.83c0,-5.54 -1.46,-12.65 -3.55,-14.02c-1.65,-1.08 -5.49,-1.48 -8.23,-0.85c-3.62,0.83 -4.57,1.99 -6.14,3.92l-0.08,0.1c-1.31,1.6 -2.59,6.92 -3,8.96v10.8c0,2.58 0.28,4.61 0.54,5.92h-2.04c-0.25,-1.41 -0.5,-3.42 -0.5,-5.92l0.02,-11.09c0.15,-0.77 1.55,-7.63 3.43,-9.94l0.08,-0.09c1.65,-2.03 2.96,-3.63 7.25,-4.61c3.28,-0.76 7.67,-0.25 9.77,1.13c3.24,2.12 4.45,10.75 4.45,15.69z"
                                                    fill="#212121"></path>
                                                <path
                                                    d="M17.165,17.283c5.217,-0.055 9.391,0.283 9,6.011c-0.391,5.728 -8.478,5.533 -9.391,5.337c-0.913,-0.196 -7.826,-0.043 -7.696,-5.337c0.131,-5.294 4.567,-5.974 8.087,-6.011z"
                                                    fill="#01579b"></path>
                                                <path
                                                    d="M40.739,37.38c-0.28,1.99 -0.69,3.53 -1.22,4.62h-2.43c0.25,-0.19 1.13,-1.11 1.67,-4.9c0.57,-4 -0.23,-11.79 -0.93,-12.78c-0.4,-0.4 -2.63,-0.8 -4.37,-0.89l0.1,-1.99c1.04,0.05 4.53,0.31 5.71,1.49c1.42,1.43 2.02,10.6 1.47,14.45z"
                                                    fill="#212121"></path>
                                                <path
                                                    d="M10.154,20.201c0.261,2.059 -0.196,3.351 2.543,3.546c2.739,0.195 8.076,1.022 9.402,-0.554c1.326,-1.576 1.75,-4.365 -0.891,-5.267c-1.872,-0.639 -8.249,-1.675 -11.054,2.275z"
                                                    fill="#81d4fa"></path>
                                                <path
                                                    d="M17.615,29.677c-0.502,0 -0.873,-0.03 -1.052,-0.069c-0.086,-0.019 -0.236,-0.035 -0.434,-0.06c-5.344,-0.679 -8.053,-2.784 -8.052,-6.255c0.001,-2.698 1.17,-7.238 8.986,-7.32l0.181,-0.002c3.444,-0.038 6.414,-0.068 8.272,1.818c1.173,1.191 1.712,3 1.647,5.53c-0.044,1.688 -0.785,3.147 -2.144,4.217c-2.234,1.76 -5.631,2.141 -7.404,2.141zM17.086,17.973c-7.006,0.074 -7.008,4.023 -7.008,5.321c-0.001,3.109 3.598,3.926 6.305,4.27c0.273,0.035 0.48,0.063 0.601,0.089c0.563,0.101 4.68,0.035 6.855,-1.732c0.865,-0.702 1.299,-1.57 1.326,-2.653c0.051,-1.958 -0.301,-3.291 -1.073,-4.075c-1.262,-1.281 -3.834,-1.255 -6.825,-1.222z"
                                                    fill="#212121"></path>
                                                <path
                                                    d="M15.078,19.043c1.957,-0.326 5.122,-0.529 4.435,1.304c-0.489,1.304 -7.185,2.185 -7.185,0.652c0,-1.532 2.75,-1.956 2.75,-1.956z"
                                                    fill="#e1f5fe"></path>
                                            </svg>

                                            <span class="now">out!</span>
                                            <span class="play">Sold</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </a>
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
