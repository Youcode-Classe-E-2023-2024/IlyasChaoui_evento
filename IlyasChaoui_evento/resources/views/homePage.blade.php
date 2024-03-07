@extends('Layouts.homeLayout')

@section('title')
    Home
@endsection
@section('content')
    <!-- ====== Hero Section Start -->
    <div id="home" class="relative h-full overflow-x-auto fixed pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <img src="./assets-home/images/header/sky.png" class="fixed z-0 h-full w-full" alt=""
                    style="z-index: -1; top: 0; left: 0">
                <img src="./assets-home/images/header/bushes.png" alt=""
                    style="position: fixed;top: -29%; left: 0%;z-index: -1">
                <div class="parallax__layer water">
                    <img src="./assets-home/images/header/water.png" alt=""
                        style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people1">
                    <img src="./assets-home/images/header/people1.png" alt=""
                        style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people2">
                    <img src="./assets-home/images/header/people2.png" alt=""
                        style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people3">
                    <img src="./assets-home/images/header/people3.png" alt=""
                        style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer hero-text">
                    <div class="year-container">
                        <h1>C</h1>
                        <h1>O</h1>
                        <h1>M</h1>
                        <h1>I</h1>
                        <h1>N</h1>
                        <h1>G</h1>
                    </div>
                </div>
                <div class="parallax__layer hero-text">
                    <div class="soon-container">
                        <h1>S</h1>
                        <h1>O</h1>
                        <h1>O</h1>
                        <h1>N</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Blog Section Start -->

    <section class="bg-gray-200 pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">

        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Create a new event
        </button>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
            style="z-index: 100">
            <!-- component -->
            <!--
                      UI Design Prototype
                      Link : https://dribbble.com/shots/10452538-React-UI-Components
                    -->
            <div class="relative py-3 mt-96 sm:max-w-xl sm:mx-auto">
                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center space-x-5">
                            <div
                                class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                                i
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

                                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

                                <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


                                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                    <!-- Photo File Input -->
                                    <input type="file" name="eventPicture" class="hidden" x-ref="photo"
                                        x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);
    ">

                                    <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                                        Event Photo <span class="text-red-600"> </span>
                                    </label>

                                    <div class="text-center">
                                        <!-- Current Profile Photo -->
                                        <div class="mt-2" x-show="! photoPreview">
                                            <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                                                class="w-72 h-40 m-auto rounded-xl shadow">
                                        </div>
                                        <!-- New Profile Photo Preview -->
                                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                                            <span class="block w-72 h-40 m-auto rounded-xl m-auto shadow"
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
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Event Title</label>
                                        <input type="text" name="title"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="Optional">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Event Price</label>
                                        <input type="text" name="price"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="Optional">
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Event City</label>
                                        <select name="city_id"
                                            class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none"
                                            style="width: 210px">
                                            <option value="" disabled selected>Select your City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->City }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Event Category</label>
                                        <select name="category_id"
                                            class=" px-5 py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none"
                                            style="width: 210px">
                                            <option value="" disabled selected>Select your City</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Place Number</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="placeNumber"
                                                class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="100">
                                            <div class="absolute left-3 top-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    class="h-6 w-6" fill="currentColor">
                                                    <path
                                                        d="M384 0H128a64 64 0 00-64 64v96h96V96h224v320h-96V416H64V128h96v32H64v256h96v32H64a32 32 0 01-32-32V64a32 32 0 0132-32h320a32 32 0 0132 32v320a32 32 0 01-32 32h-96v-32h96V96a64 64 0 00-64-64z" />
                                                    <path
                                                        d="M288 64H224v32h64zM416 128H96v256h32v-96h256v96h32V128zM128 192h256v32H128zm0 64h256v32H128zm192 160h32v32h-32zm0-128h32v32h-32zm0-96h32v32h-32z" />
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Event Date</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="date" name="deadline"
                                                class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="26/02/2020">
                                            <div class="absolute left-3 top-2">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                    <textarea type="text" name="description"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Optional"></textarea>
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

        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            The Events
                        </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Our Recent Events
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <!-- component -->
                <!-- Create By Joker Banny -->
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
                                        <p>(0/{{ $event->place_number }})</p>
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
                                    <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- ====== Blog Section End -->



    <!-- ====== FAQ Section Start -->
    <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-4 top-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#13C296" />
                </svg>
            </span>
            <span class="absolute bottom-4 right-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#3758F9" />
                </svg>
            </span>
        </div>
    </section>
    <!-- ====== FAQ Section End -->
    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
        <div class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"></div>
        <div class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"></div>
        <div class="container px-4">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
                            <span class="mb-6 block text-base font-medium text-dark dark:text-white">
                                CONTACT US
                            </span>
                            <h2 class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white">
                                Let's talk about your problem.
                            </h2>
                        </div>
                        <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                        Our Location
                                    </h5>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                        How Can We Help?
                                    </h5>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        info@yourdomain.com
                                    </p>
                                    <p class="mt-1 text-base text-body-color dark:text-dark-6">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
                        data-wow-delay=".2s
              ">
                        <h3 class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]">
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-[22px]">
                                <label for="fullName" class="mb-4 block text-sm text-body-color dark:text-dark-6">Full
                                    Name*</label>
                                <input type="text" name="fullName" placeholder="Adam Gelius"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                            </div>
                            <div class="mb-[22px]">
                                <label for="email"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                            </div>
                            <div class="mb-[22px]">
                                <label for="phone"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6">Phone*</label>
                                <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                            </div>
                            <div class="mb-[30px]">
                                <label for="message"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"
                                    class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-blue-dark">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Brands Section Start -->
    <section class="pb-20 dark:bg-dark">
        <div class="container px-4">
            <div class="-mx-4 flex flex-wrap items-center justify-center gap-8 xl:gap-11">
                <a href="https://graygrids.com/">
                    <img src="./assets-home/images/brands/graygrids.svg" alt="graygrids" class="dark:hidden" />
                    <img src="./assets-home/images/brands/graygrids-white.svg" alt="graygrids"
                        class="hidden dark:block" />
                </a>
                <a href="https://lineicons.com/">
                    <img src="./assets-home/images/brands/lineicons.svg" alt="lineicons" class="dark:hidden" />
                    <img src="./assets-home/images/brands/lineicons-white.svg" alt="graygrids"
                        class="hidden dark:block" />
                </a>
                <a href="https://uideck.com/">
                    <img src="./assets-home/images/brands/uideck.svg" alt="uideck" class="dark:hidden" />
                    <img src="./assets-home/images/brands/uideck-white.svg" alt="graygrids" class="hidden dark:block" />
                </a>
                <a href="https://ayroui.com/">
                    <img src="./assets-home/images/brands/ayroui.svg" alt="ayroui" class="dark:hidden" />
                    <img src="./assets-home/images/brands/ayroui-white.svg" alt="graygrids" class="hidden dark:block" />
                </a>
                <a href="https://tailgrids.com/">
                    <img src="./assets-home/images/brands/tailgrids.svg" alt="tailgrids" class="dark:hidden" />
                    <img src="./assets-home/images/brands/tailgrids-white.svg" alt="graygrids"
                        class="hidden dark:block" />
                </a>
            </div>
        </div>
    </section>
    <!-- ====== Brands Section End -->
@endsection
