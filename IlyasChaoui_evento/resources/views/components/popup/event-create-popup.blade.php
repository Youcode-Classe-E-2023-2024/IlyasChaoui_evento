<!-- Modal toggle -->

<button class="c-button absolute right-2" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">
    <span class="c-main">
        <span class="c-ico"><span class="c-blur"></span> <span class="ico-text">+</span></span>
        Create Event
    </span>
</button>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
     style="z-index: 100">
    <!-- component -->

    <div class="relative py-3 mt-96 w-full flex justify-center items-center sm:mx-auto">
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
                <form action="{{ route('add.event') }}" method="post" enctype="multipart/form-data"
                      class="divide-y divide-gray-200">
                    @csrf
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <!-- component -->
                        <!-- This is an example component -->

                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"
                                defer></script>

                        <script
                            src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


                        <div x-data="{ photoName: null, photoPreview: null }"
                             class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <!-- Photo File Input -->
                            <input type="file" name="eventPicture" class="hidden" x-ref="photo" value="{{ old('eventPicture') }}"
                                   x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">


                            <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                                Event Photo <span class="text-red-600"> </span>
                            </label>

                            <div class="text-center">
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    <img
                                        src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                                        class="w-96 h-52 m-auto rounded-xl shadow">
                                </div>
                                <!-- New Profile Photo Preview -->
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                    <span class="block w-96 h-52 m-auto rounded-xl m-auto shadow"
                                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                                        photoPreview + '\');'"
                                          style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                    </span>
                                </div>
                                <button type="button"
                                        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                                        x-on:click.prevent="$refs.photo.click()">
                                    Select New Photo
                                </button>
                                @error('eventPicture')
                                <div
                                    class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Title</label>
                                <input type="text" name="title" value="{{ old('title') }}"
                                       class="px-4 py-2 border-2 focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-900 rounded-md focus:outline-none text-gray-600"
                                       placeholder="Optional">
                                @error('title')
                                <div
                                    class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Price</label>
                                <input type="text" name="price" value="{{ old('price') }}"
                                       class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                       placeholder="Optional">
                                @error('price')
                                <div
                                    class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event City</label>
                                <select name="city_id"
                                        class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-full">
                                    <option value="" disabled>Select your Category</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->City }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <div
                                    class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Category</label>
                                <select name="category_id"
                                        class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-full">
                                    <option value="" disabled>Select your City</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div
                                    class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Place Number</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="number" name="placeNumber" value="{{ old('placeNumber') }}"
                                           class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                           placeholder="100">
                                    @error('placeNumber')
                                    <div
                                        class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                        role="alert">
                                        <button type="button" class="close font__size-18" data-dismiss="alert">
                                            <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                        <strong class="text-red-500">{{ $message }}</strong>
                                    </div>
                                    @enderror
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
                                    <input type="date" name="deadline" value="{{ old('deadline') }}"
                                           class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                           placeholder="26/02/2020">
                                    @error('deadline')
                                    <div
                                        class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                        role="alert">
                                        <button type="button" class="close font__size-18" data-dismiss="alert">
                                            <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                        <strong class="text-red-500">{{ $message }}</strong>
                                    </div>
                                    @enderror
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
                            <textarea type="text" name="description" value="{{ old('description') }}"
                                      class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                      placeholder="Optional"></textarea>
                            @error('description')
                            <div
                                class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="text-red-500">{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="checkbox-wrapper-35">
                            <input value="private" name="reservation_type" id="switch" type="checkbox" value="{{ old('reservation_type') }}"
                                   class="switch">
                            @error('reservation_type')
                            <div
                                class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="text-red-500">{{ $message }}</strong>
                            </div>
                            @enderror
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
                        <button
                            class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
