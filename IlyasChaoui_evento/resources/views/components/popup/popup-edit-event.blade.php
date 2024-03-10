<!-- Modal toggle -->
<button class="Btn" data-modal-target="crud-modal-{{ $event->id }}" data-modal-toggle="crud-modal-{{ $event->id }}" type="button">
    <svg class="svg" viewBox="0 0 512 512">
        <path
            d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
    </svg>
</button>
<!-- Main modal -->
<div id="crud-modal-{{ $event->id }}" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
     style="z-index: 100">
    <!-- component -->

    <div class="relative py-3 mt-20 w-full flex justify-center items-center sm:mx-auto">
        <div class="relative px-4 py-10 bg-gray-200 dark:bg-slate-900 mx-8 md:mx-0 shadow rounded-xl sm:p-10"
             style="width: fit-content">
            <div class="max-w-1/2 mx-auto">
                <button type="button"
                        class="text-gray-400 absolute right-0 top-0 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex items-center space-x-5">
                    <div
                        class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                        <img class="rounded-full" src="{{ $user->picture }}" alt="">
                    </div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Create an Event</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit.</p>
                    </div>
                </div>
                <form action="{{ route('events.update', ['id' => $event->id]) }}" method="post"
                      class="divide-y divide-gray-200">
                    @csrf
                    @method('PUT')
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <!-- component -->
                        <!-- This is an example component -->
                        <div class="flex flex-wrap items-center justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Title</label>
                                <input type="text" name="title" value="{{ $event->title }}"
                                       class="px-4 py-2 border-2 focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-900 rounded-md focus:outline-none text-gray-600"
                                       placeholder="Optional">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Price</label>
                                <input type="text" name="price" value="{{ $event->price }}"
                                       class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                       placeholder="Optional">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event City</label>
                                <select name="city_id"
                                        class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-full">
                                    <option value="" disabled selected>Select your Category</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->City }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Category</label>
                                <select name="category_id"
                                        class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-full">
                                    <option value="" disabled selected>Select your City</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Place Number</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="number" name="placeNumber" value="{{ $event->place_number }}"
                                           class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                           placeholder="100">
                                    <div class="absolute left-3 top-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 w-6"
                                             fill="currentColor">
                                            <path
                                                d="M384 0H128a64 64 0 00-64 64v96h96V96h224v320h-96V416H64V128h96v32H64v256h96v32H64a32 32 0 01-32-32V64a32 32 0 0132-32h320a32 32 0 0132 32v320a32 32 0 01-32 32h-96v-32h96V96a64 64 0 00-64-64z"/>
                                            <path
                                                d="M288 64H224v32h64zM416 128H96v256h32v-96h256v96h32V128zM128 192h256v32H128zm0 64h256v32H128zm192 160h32v32h-32zm0-128h32v32h-32zm0-96h32v32h-32z"/>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Date</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="date" name="deadline" value="{{ $event->deadline }}"
                                           class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                           placeholder="26/02/2020">
                                    <div class="absolute left-3 top-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Event Description</label>
                            <input type="text" name="description" value="{{ $event->description }}"
                                   class="px-4 py-2 h-20 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                   placeholder="Optional"></input>
                        </div>
                        <div class="checkbox-wrapper-35">
                            <input value="private" name="reservation_type" id="switch" type="checkbox"
                                   class="switch">
                            <label for="switch">
                                <span class="switch-x-text">This is </span>
                                <span class="switch-x-toggletext">
                                    <span class="switch-x-unchecked"><span class="switch-x-hiddenlabel">Unchecked:
                                        </span>Manual</span>
                                    <span class="switch-x-checked"><span class="switch-x-hiddenlabel">Checked:
                                        </span>Automatic</span>
                                </span>
                            </label>
                        </div>

                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <button type="button"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none"
                                data-modal-toggle="crud-modal">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancel
                        </button>
                        <button type="submit" style="background-color: dodgerblue"
                                class=" flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
