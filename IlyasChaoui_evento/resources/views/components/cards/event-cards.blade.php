{{--<div--}}
{{--    class="md:px-4 md:grid text-black dark:bg-dark dark:text-white md:grid-cols-2 lg:grid-cols-4 gap-5 space-y-4 md:space-y-0">--}}
{{--    @foreach ($events as $event)--}}
{{--        <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">--}}
{{--            <div--}}
{{--                class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">--}}
{{--                <h3 class="mb-3 text-xl font-bold text-indigo-600">{{ $event->category->name }}</h3>--}}
{{--                <div class="relative">--}}
{{--                    @foreach ($event->getMedia() as $mediaItem)--}}
{{--                        <img class="w-full rounded-xl" src="{{ $mediaItem->getUrl() }}" alt="Colors"/>--}}
{{--                    @endforeach--}}
{{--                    <p--}}
{{--                        class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">--}}
{{--                        {{ $event->price }}</p>--}}
{{--                </div>--}}
{{--                <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $event->title }}</h1>--}}
{{--                <div class="my-4">--}}
{{--                    <div class="flex space-x-1 items-center">--}}
{{--                        <span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"--}}
{{--                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <div class="countdown-timer" data-deadline="{{ $event->deadline }}"></div>--}}
{{--                    </div>--}}
{{--                    <div class="flex space-x-1 items-center">--}}
{{--                        <span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"--}}
{{--                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <p>(0/{{ $event->place_number }})</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex space-x-1 items-center">--}}
{{--                        <span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"--}}
{{--                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <p>{{ $event->city->City }}</p>--}}
{{--                    </div>--}}
{{--                    <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}"--}}
{{--                       class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">--}}
{{--                        Buy--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <script>--}}
{{--            document.addEventListener('DOMContentLoaded', function () {--}}
{{--                const countdownElements = document.querySelectorAll('.countdown-timer');--}}

{{--                countdownElements.forEach(element => {--}}
{{--                    const deadline = new Date(element.getAttribute('data-deadline')).getTime();--}}

{{--                    const interval = setInterval(() => {--}}
{{--                        const now = new Date().getTime();--}}
{{--                        const distance = deadline - now;--}}

{{--                        if (distance < 0) {--}}
{{--                            clearInterval(interval);--}}
{{--                            element.innerHTML = "Event has ended";--}}
{{--                            return;--}}
{{--                        }--}}

{{--                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));--}}
{{--                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}

{{--                        element.innerHTML = days + "d " + hours + "h " +--}}
{{--                            minutes + "m " + seconds + "s ";--}}
{{--                    }, 1000);--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="card-grid">--}}
{{--    <div class="relative mx-auto w-full">--}}
{{--        <a href="#" class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">--}}
{{--            <div class="shadow p-4 rounded-lg bg-white">--}}
{{--                <div class="flex justify-center relative rounded-lg overflow-hidden h-52">--}}
{{--                    <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">--}}
{{--                        <div class="absolute inset-0 bg-black opacity-10"></div>--}}
{{--                    </div>--}}

{{--                    <div class="absolute flex justify-center bottom-0 mb-3">--}}
{{--                        <div class="flex bg-white px-4 py-1 space-x-5 rounded-lg overflow-hidden shadow">--}}
{{--                            <p class="flex items-center font-medium text-gray-800">--}}
{{--                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480,226.15V80a48,48,0,0,0-48-48H80A48,48,0,0,0,32,80V226.15C13.74,231,0,246.89,0,266.67V472a8,8,0,0,0,8,8H24a8,8,0,0,0,8-8V416H480v56a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V266.67C512,246.89,498.26,231,480,226.15ZM64,192a32,32,0,0,1,32-32H208a32,32,0,0,1,32,32v32H64Zm384,32H272V192a32,32,0,0,1,32-32H416a32,32,0,0,1,32,32ZM80,64H432a16,16,0,0,1,16,16v56.9a63.27,63.27,0,0,0-32-8.9H304a63.9,63.9,0,0,0-48,21.71A63.9,63.9,0,0,0,208,128H96a63.27,63.27,0,0,0-32,8.9V80A16,16,0,0,1,80,64ZM32,384V266.67A10.69,10.69,0,0,1,42.67,256H469.33A10.69,10.69,0,0,1,480,266.67V384Z"></path></svg>--}}
{{--                                3 + 1--}}
{{--                            </p>--}}

{{--                            <p class="flex items-center font-medium text-gray-800">--}}
{{--                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512"><path d="M423.18 195.81l-24.94-76.58C387.51 86.29 356.81 64 322.17 64H157.83c-34.64 0-65.34 22.29-76.07 55.22L56.82 195.8C24.02 205.79 0 235.92 0 271.99V400c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48v-16h256v16c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48V271.99c0-36.07-24.02-66.2-56.82-76.18zm-310.99-66.67c6.46-19.82 24.8-33.14 45.64-33.14h164.34c20.84 0 39.18 13.32 45.64 33.13l20.47 62.85H91.72l20.47-62.84zM80 400c0 8.83-7.19 16-16 16H48c-8.81 0-16-7.17-16-16v-16h48v16zm368 0c0 8.83-7.19 16-16 16h-16c-8.81 0-16-7.17-16-16v-16h48v16zm0-80.01v32H32v-80c0-26.47 21.53-48 48-48h320c26.47 0 48 21.53 48 48v48zM104.8 248C78.84 248 60 264.8 60 287.95c0 23.15 18.84 39.95 44.8 39.95l10.14.1c39.21 0 45.06-20.1 45.06-32.08 0-24.68-31.1-47.92-55.2-47.92zm10.14 56c-3.51 0-7.02-.1-10.14-.1-12.48 0-20.8-6.38-20.8-15.95S92.32 272 104.8 272s31.2 14.36 31.2 23.93c0 7.17-10.53 8.07-21.06 8.07zm260.26-56c-24.1 0-55.2 23.24-55.2 47.93 0 11.98 5.85 32.08 45.06 32.08l10.14-.1c25.96 0 44.8-16.8 44.8-39.95 0-23.16-18.84-39.96-44.8-39.96zm0 55.9c-3.12 0-6.63.1-10.14.1-10.53 0-21.06-.9-21.06-8.07 0-9.57 18.72-23.93 31.2-23.93s20.8 6.38 20.8 15.95-8.32 15.95-20.8 15.95z"></path></svg>--}}
{{--                                2--}}
{{--                            </p>--}}

{{--                            <p class="flex items-center font-medium text-gray-800">--}}
{{--                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504,256H64V61.25a29.26,29.26,0,0,1,49.94-20.69L139.18,65.8A71.49,71.49,0,0,0,128,104c0,20.3,8.8,38.21,22.34,51.26L138.58,167a8,8,0,0,0,0,11.31l11.31,11.32a8,8,0,0,0,11.32,0L285.66,65.21a8,8,0,0,0,0-11.32L274.34,42.58a8,8,0,0,0-11.31,0L251.26,54.34C238.21,40.8,220.3,32,200,32a71.44,71.44,0,0,0-38.2,11.18L136.56,18A61.24,61.24,0,0,0,32,61.25V256H8a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H32v96c0,41.74,26.8,76.9,64,90.12V504a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V480H384v24a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V474.12c37.2-13.22,64-48.38,64-90.12V288h24a8,8,0,0,0,8-8V264A8,8,0,0,0,504,256ZM228.71,76.9,172.9,132.71A38.67,38.67,0,0,1,160,104a40,40,0,0,1,40-40A38.67,38.67,0,0,1,228.71,76.9ZM448,384a64.07,64.07,0,0,1-64,64H128a64.07,64.07,0,0,1-64-64V288H448Z"></path></svg>--}}
{{--                                3--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <span class="absolute top-0 left-0 inline-flex mt-3 ml-3 px-3 py-2 rounded-lg z-10 bg-red-500 text-sm font-medium text-white select-none">--}}
{{--			Featured--}}
{{--		  </span>--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1" title="New York">--}}
{{--                        Statue of Liberty--}}
{{--                    </h2>--}}
{{--                    <p class="mt-2 text-sm text-gray-800 line-clamp-1" title="New York, NY 10004, United States">--}}
{{--                        New York, NY 10004, United States--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div class="grid grid-cols-2 grid-rows-2 gap-4 mt-8">--}}
{{--                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">--}}
{{--                        <svg class="inline-block w-5 h-5 xl:w-4 xl:h-4 mr-3 fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M570.53,242,512,190.75V48a16,16,0,0,0-16-16H400a16,16,0,0,0-16,16V78.75L298.53,4a16,16,0,0,0-21.06,0L5.47,242a16,16,0,0,0,21.07,24.09L64,233.27V464a48.05,48.05,0,0,0,48,48H464a48.05,48.05,0,0,0,48-48V233.27l37.46,32.79A16,16,0,0,0,570.53,242ZM480,464a16,16,0,0,1-16,16H112a16,16,0,0,1-16-16V205.27l192-168,192,168Zm0-301.25-64-56V64h64ZM208,218.67V325.34A26.75,26.75,0,0,0,234.66,352H341.3A26.76,26.76,0,0,0,368,325.34V218.67A26.75,26.75,0,0,0,341.3,192H234.66A26.74,26.74,0,0,0,208,218.67ZM240,224h96v96H240Z"></path></svg>--}}
{{--                        <span class="mt-2 xl:mt-0">--}}
{{--			  Condominium--}}
{{--			</span>--}}
{{--                    </p>--}}
{{--                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">--}}
{{--                        <svg class="inline-block w-5 h-5 xl:w-4 xl:h-4 mr-3 fill-current text-gray-800" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M17.5883 7.872H16.4286L16.7097 8.99658H6.74743V10.1211H17.4309C17.5163 10.1211 17.6006 10.1017 17.6774 10.0642C17.7542 10.0267 17.8214 9.97222 17.874 9.90487C17.9266 9.83753 17.9631 9.75908 17.9808 9.6755C17.9986 9.59192 17.997 9.5054 17.9763 9.42251L17.5883 7.872ZM17.5883 4.49829H16.4286L16.7097 5.62286H6.74743V6.74743H17.4309C17.5163 6.74742 17.6006 6.72794 17.6774 6.69046C17.7542 6.65299 17.8214 6.59851 17.874 6.53116C17.9266 6.46381 17.9631 6.38537 17.9808 6.30179C17.9986 6.2182 17.997 6.13168 17.9763 6.04879L17.5883 4.49829ZM17.4309 0H0.562286C0.413158 0 0.270139 0.0592407 0.16469 0.16469C0.0592407 0.270139 0 0.413158 0 0.562286L0 2.81143C0 2.96056 0.0592407 3.10358 0.16469 3.20903C0.270139 3.31448 0.413158 3.37372 0.562286 3.37372H4.49829V5.62286H1.28271L1.56386 4.49829H0.404143L0.0175714 6.04879C-0.00313354 6.13162 -0.00470302 6.21808 0.012982 6.30161C0.0306671 6.38514 0.0671423 6.46355 0.119641 6.53088C0.172139 6.59822 0.239283 6.65271 0.315978 6.69023C0.392673 6.72775 0.476905 6.74731 0.562286 6.74743H4.49829V8.99658H1.28271L1.56386 7.872H0.404143L0.0175714 9.42251C-0.00313354 9.50534 -0.00470302 9.5918 0.012982 9.67533C0.0306671 9.75886 0.0671423 9.83727 0.119641 9.9046C0.172139 9.97193 0.239283 10.0264 0.315978 10.0639C0.392673 10.1015 0.476905 10.121 0.562286 10.1211H4.49829V14.7228C4.12312 14.8554 3.80693 15.1164 3.60559 15.4596C3.40424 15.8028 3.33072 16.2062 3.39801 16.5984C3.4653 16.9906 3.66907 17.3464 3.9733 17.6028C4.27754 17.8593 4.66265 18 5.06057 18C5.4585 18 5.84361 17.8593 6.14784 17.6028C6.45208 17.3464 6.65585 16.9906 6.72314 16.5984C6.79043 16.2062 6.7169 15.8028 6.51556 15.4596C6.31422 15.1164 5.99803 14.8554 5.62286 14.7228V3.37372H17.4309C17.58 3.37372 17.723 3.31448 17.8285 3.20903C17.9339 3.10358 17.9932 2.96056 17.9932 2.81143V0.562286C17.9932 0.413158 17.9339 0.270139 17.8285 0.16469C17.723 0.0592407 17.58 0 17.4309 0V0ZM5.06057 16.8686C4.94936 16.8686 4.84065 16.8356 4.74818 16.7738C4.65572 16.712 4.58365 16.6242 4.54109 16.5215C4.49853 16.4187 4.4874 16.3057 4.50909 16.1966C4.53079 16.0875 4.58434 15.9873 4.66298 15.9087C4.74162 15.8301 4.8418 15.7765 4.95088 15.7548C5.05995 15.7331 5.17301 15.7443 5.27575 15.7868C5.3785 15.8294 5.46631 15.9014 5.5281 15.9939C5.58988 16.0864 5.62286 16.1951 5.62286 16.3063C5.62286 16.4554 5.56362 16.5984 5.45817 16.7039C5.35272 16.8093 5.2097 16.8686 5.06057 16.8686ZM16.8686 2.24914H1.12457V1.12457H16.8686V2.24914Z"></path>--}}
{{--                        </svg>--}}
{{--                        <span class="mt-2 xl:mt-0">--}}
{{--			  Partly furnished--}}
{{--			</span>--}}
{{--                    </p>--}}
{{--                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">--}}
{{--                        <svg class="inline-block w-5 h-5 xl:w-4 xl:h-4 mr-3 fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M399.959 170.585c-4.686 4.686-4.686 12.284 0 16.971L451.887 239H60.113l51.928-51.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-84.485 84c-4.686 4.686-4.686 12.284 0 16.971l84.485 84c4.686 4.686 12.284 4.686 16.97 0l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273h391.773l-51.928 51.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l84.485-84c4.687-4.686 4.687-12.284 0-16.971l-84.485-84c-4.686-4.686-12.284-4.686-16.97 0l-7.07 7.071z"></path></svg>--}}
{{--                        <span class="mt-2 xl:mt-0">--}}
{{--			  1,386 sq. ft.--}}
{{--			</span>--}}
{{--                    </p>--}}
{{--                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">--}}
{{--                        <svg class="inline-block w-5 h-5 xl:w-4 xl:h-4 mr-3 fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M532.01 386.17C559.48 359.05 576 325.04 576 288c0-80.02-76.45-146.13-176.18-157.94 0 .01.01.02.01.03C368.37 72.47 294.34 32 208 32 93.12 32 0 103.63 0 192c0 37.04 16.52 71.05 43.99 98.17-15.3 30.74-37.34 54.53-37.7 54.89-6.31 6.69-8.05 16.53-4.42 24.99A23.085 23.085 0 0 0 23.06 384c53.54 0 96.67-20.24 125.17-38.78 9.08 2.09 18.45 3.68 28 4.82C207.74 407.59 281.73 448 368 448c20.79 0 40.83-2.41 59.77-6.78C456.27 459.76 499.4 480 552.94 480c9.22 0 17.55-5.5 21.18-13.96 3.64-8.46 1.89-18.3-4.42-24.99-.35-.36-22.39-24.14-37.69-54.88zm-376.59-72.13l-13.24-3.05-11.39 7.41c-20.07 13.06-50.49 28.25-87.68 32.47 8.77-11.3 20.17-27.61 29.54-46.44l10.32-20.75-16.49-16.28C50.75 251.87 32 226.19 32 192c0-70.58 78.95-128 176-128s176 57.42 176 128-78.95 128-176 128c-17.73 0-35.42-2.01-52.58-5.96zm289.8 100.35l-11.39-7.41-13.24 3.05A234.318 234.318 0 0 1 368 416c-65.14 0-122-25.94-152.43-64.29C326.91 348.62 416 278.4 416 192c0-9.45-1.27-18.66-3.32-27.66C488.12 178.78 544 228.67 544 288c0 34.19-18.75 59.87-34.47 75.39l-16.49 16.28 10.32 20.75c9.38 18.86 20.81 35.19 29.53 46.44-37.19-4.22-67.6-19.41-87.67-32.47zM233.38 182.91l-41.56-12.47c-4.22-1.27-7.19-5.62-7.19-10.58 0-6.03 4.34-10.94 9.66-10.94h25.94c3.9 0 7.65 1.08 10.96 3.1 3.17 1.93 7.31 1.15 10-1.4l11.44-10.87c3.53-3.36 3.38-9.22-.54-12.11-8.18-6.03-17.97-9.58-28.08-10.32V104c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v13.4c-21.85 1.29-39.38 19.62-39.38 42.46 0 18.98 12.34 35.94 30 41.23l41.56 12.47c4.22 1.27 7.19 5.62 7.19 10.58 0 6.03-4.34 10.94-9.66 10.94h-25.94c-3.9 0-7.65-1.08-10.96-3.1-3.17-1.94-7.31-1.15-10 1.4l-11.44 10.87c-3.53 3.36-3.38 9.22.54 12.11 8.18 6.03 17.97 9.58 28.08 10.32V280c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-13.4c21.85-1.29 39.38-19.62 39.38-42.46 0-18.98-12.35-35.94-30-41.23z"></path></svg>--}}
{{--                        <span class="mt-2 xl:mt-0">--}}
{{--			  $1.98 /sq.ft--}}
{{--			</span>--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div class="grid grid-cols-2 mt-8">--}}
{{--                    <div class="flex items-center">--}}
{{--                        <div class="relative">--}}
{{--                            <div class="rounded-full w-6 h-6 md:w-8 md:h-8 bg-gray-200"></div>--}}
{{--                            <span class="absolute top-0 right-0 inline-block w-3 h-3 bg-primary-red rounded-full"></span>--}}
{{--                        </div>--}}

{{--                        <p class="ml-2 text-gray-800 line-clamp-1">--}}
{{--                            John Doe--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <div class="flex justify-end">--}}
{{--                        <p class="inline-block font-semibold text-primary whitespace-nowrap leading-tight rounded-xl">--}}
{{--			  <span class="text-sm uppercase">--}}
{{--				$--}}
{{--			  </span>--}}
{{--                            <span class="text-lg">3,200</span>/m--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="max-w-6xl mx-auto">--}}
{{--    <div class="card flex items-center justify-center">--}}
{{--        <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">--}}
{{--            <div class="bg-white shadow-xl rounded-lg overflow-hidden">--}}
{{--                <div class="card__background pl-5 pr-5 pt-5"--}}
{{--                >--}}
{{--                    @foreach ($event->getMedia() as $mediaItem)--}}
{{--                        <img class="w-full rounded-xl" src="{{ $mediaItem->getUrl() }}" alt="Colors"/>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">Detached house • 5y old</p>--}}
{{--                    <p class="text-3xl text-gray-900">$750,000</p>--}}
{{--                    <p class="text-gray-700">742 Evergreen Terrace</p>--}}
{{--                </div>--}}
{{--                <div class="flex p-4 border-t border-gray-300 text-gray-700">--}}
{{--                    <div class="flex-1 inline-flex items-center">--}}
{{--                        <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
{{--                            <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>--}}
{{--                        </svg>--}}
{{--                        <p><span class="text-gray-900 font-bold">3</span> Bedrooms</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex-1 inline-flex items-center">--}}
{{--                        <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
{{--                            <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>--}}
{{--                        </svg>--}}
{{--                        <p><span class="text-gray-900 font-bold">2</span> Bathrooms</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">--}}
{{--                    <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>--}}
{{--                    <div class="flex items-center pt-2">--}}
{{--                        <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://via.placeholder.com/50x50)">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <p class="font-bold text-gray-900">Catherine Heffner</p>--}}
{{--                            <p class="text-sm text-gray-700">(111) 111-1111</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="card-grid sm:-ml-10">
    @foreach ($events as $event)
        <div class="card flex rounded-xl w-full items-center justify-center">
            <a href="{{ route('content.page', ['id' => $event->id, 'categoryId' => $event->category->id]) }}">
                <div class="content max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    @if(strtotime($event->deadline) > time() && $event->reservationsCount->count() < $event->place_number)
                        <div class="bg-white dark:bg-slate-850 shadow-xl rounded-lg overflow-hidden">
                            <div class="card__background pl-5 pr-5 pt-5"
                                 style="height: 200px; width: 300px; overflow: hidden;">
                                @foreach ($event->getMedia() as $mediaItem)
                                    <img class="w-full h-full object-cover rounded-xl" src="{{ $mediaItem->getUrl() }}"
                                         alt="Colors"/>
                                @endforeach
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between">
                                    <p class="uppercase bg-gray-200 rounded-xl tracking-wide p-3 text-sm font-bold text-gray-700"
                                       style="width: fit-content">{{ $event->category->name }}</p>
                                    @if($event->acceptation == 0)
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
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </span>
                                    <div class="countdown-timer text-black"
                                         data-deadline="{{ $event->deadline }}"></div>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 border-t border-gray-300 text-gray-700">
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"/>
                                    </svg>
                                    <p><span class="text-gray-900 font-bold">({{ $event->reservationsCount->count() }}/{{ $event->place_number }})</span>
                                        Places</p>
                                </div>
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
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
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 36 36"
                                                width="36px"
                                                height="36px"
                                            >
                                                <rect width="36" height="36" x="0" y="0" fill="#fdd835"></rect>
                                                <path
                                                    fill="#e53935"
                                                    d="M38.67,42H11.52C11.27,40.62,11,38.57,11,36c0-5,0-11,0-11s1.44-7.39,3.22-9.59 c1.67-2.06,2.76-3.48,6.78-4.41c3-0.7,7.13-0.23,9,1c2.15,1.42,3.37,6.67,3.81,11.29c1.49-0.3,5.21,0.2,5.5,1.28 C40.89,30.29,39.48,38.31,38.67,42z"
                                                ></path>
                                                <path
                                                    fill="#b71c1c"
                                                    d="M39.02,42H11.99c-0.22-2.67-0.48-7.05-0.49-12.72c0.83,4.18,1.63,9.59,6.98,9.79 c3.48,0.12,8.27,0.55,9.83-2.45c1.57-3,3.72-8.95,3.51-15.62c-0.19-5.84-1.75-8.2-2.13-8.7c0.59,0.66,3.74,4.49,4.01,11.7 c0.03,0.83,0.06,1.72,0.08,2.66c4.21-0.15,5.93,1.5,6.07,2.35C40.68,33.85,39.8,38.9,39.02,42z"
                                                ></path>
                                                <path
                                                    fill="#212121"
                                                    d="M35,27.17c0,3.67-0.28,11.2-0.42,14.83h-2C32.72,38.42,33,30.83,33,27.17 c0-5.54-1.46-12.65-3.55-14.02c-1.65-1.08-5.49-1.48-8.23-0.85c-3.62,0.83-4.57,1.99-6.14,3.92L15,16.32 c-1.31,1.6-2.59,6.92-3,8.96v10.8c0,2.58,0.28,4.61,0.54,5.92H10.5c-0.25-1.41-0.5-3.42-0.5-5.92l0.02-11.09 c0.15-0.77,1.55-7.63,3.43-9.94l0.08-0.09c1.65-2.03,2.96-3.63,7.25-4.61c3.28-0.76,7.67-0.25,9.77,1.13 C33.79,13.6,35,22.23,35,27.17z"
                                                ></path>
                                                <path
                                                    fill="#01579b"
                                                    d="M17.165,17.283c5.217-0.055,9.391,0.283,9,6.011c-0.391,5.728-8.478,5.533-9.391,5.337 c-0.913-0.196-7.826-0.043-7.696-5.337C9.209,18,13.645,17.32,17.165,17.283z"
                                                ></path>
                                                <path
                                                    fill="#212121"
                                                    d="M40.739,37.38c-0.28,1.99-0.69,3.53-1.22,4.62h-2.43c0.25-0.19,1.13-1.11,1.67-4.9 c0.57-4-0.23-11.79-0.93-12.78c-0.4-0.4-2.63-0.8-4.37-0.89l0.1-1.99c1.04,0.05,4.53,0.31,5.71,1.49 C40.689,24.36,41.289,33.53,40.739,37.38z"
                                                ></path>
                                                <path
                                                    fill="#81d4fa"
                                                    d="M10.154,20.201c0.261,2.059-0.196,3.351,2.543,3.546s8.076,1.022,9.402-0.554 c1.326-1.576,1.75-4.365-0.891-5.267C19.336,17.287,12.959,16.251,10.154,20.201z"
                                                ></path>
                                                <path
                                                    fill="#212121"
                                                    d="M17.615,29.677c-0.502,0-0.873-0.03-1.052-0.069c-0.086-0.019-0.236-0.035-0.434-0.06 c-5.344-0.679-8.053-2.784-8.052-6.255c0.001-2.698,1.17-7.238,8.986-7.32l0.181-0.002c3.444-0.038,6.414-0.068,8.272,1.818 c1.173,1.191,1.712,3,1.647,5.53c-0.044,1.688-0.785,3.147-2.144,4.217C22.785,29.296,19.388,29.677,17.615,29.677z M17.086,17.973 c-7.006,0.074-7.008,4.023-7.008,5.321c-0.001,3.109,3.598,3.926,6.305,4.27c0.273,0.035,0.48,0.063,0.601,0.089 c0.563,0.101,4.68,0.035,6.855-1.732c0.865-0.702,1.299-1.57,1.326-2.653c0.051-1.958-0.301-3.291-1.073-4.075 c-1.262-1.281-3.834-1.255-6.825-1.222L17.086,17.973z"
                                                ></path>
                                                <path
                                                    fill="#e1f5fe"
                                                    d="M15.078,19.043c1.957-0.326,5.122-0.529,4.435,1.304c-0.489,1.304-7.185,2.185-7.185,0.652 C12.328,19.467,15.078,19.043,15.078,19.043z"
                                                ></path>
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
                                         alt="Colors"/>
                                @endforeach
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between">
                                    <p class="uppercase bg-gray-200 rounded-xl tracking-wide p-3 text-sm font-bold text-gray-700"
                                       style="width: fit-content">{{ $event->category->name }}</p>
                                    @if($event->acceptation == 0)
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
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </span>
                                    <div class="countdown-timer text-black"
                                         data-deadline="{{ $event->deadline }}"></div>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 border-t border-gray-300 text-gray-700">
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"/>
                                    </svg>
                                    <p><span class="text-gray-900 font-bold">({{ $event->reservationsCount->count() }}/{{ $event->place_number }})</span>
                                        Places</p>
                                </div>
                                <div class="flex-1 inline-flex items-center">
                                    <svg class="h-6 w-6 text-gray-600 fill-current mr-3"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36px"
                                                 height="36px">
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
            document.addEventListener('DOMContentLoaded', function () {
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
