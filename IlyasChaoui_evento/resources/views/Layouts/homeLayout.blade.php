<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Evento | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets-home/images/nav-logo.png') }}" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets-home/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/alert.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/parallax.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/toogleButton.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/cards.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-home/css/button.css') }}"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets-home/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</head>
<style>
    :root {
        --background-dark: #2d3548;
        --text-light: rgba(255, 255, 255, 0.6);
        --text-lighter: rgba(255, 255, 255, 0.9);
        --spacing-s: 8px;
        --spacing-m: 16px;
        --spacing-l: 24px;
        --spacing-xl: 32px;
        --spacing-xxl: 64px;
        --width-container: 1200px;
    }

    * {
        border: 0;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        height: 100%;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
    }

    body {
        height: 100%;
    }

    .hero-section {
        align-items: flex-start;
        background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
        display: flex;
        min-height: 100%;
        justify-content: center;
        padding: var(--spacing-xxl) var(--spacing-l);
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-column-gap: var(--spacing-l);
        grid-row-gap: var(--spacing-l);
        max-width: var(--width-container);
        width: 100%;
    }

    @media (min-width: 540px) {
        .card-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 960px) {
        .card-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .card {
        list-style: none;
        position: relative;
    }

    .card__background {
        transform-origin: center;
        transform: scale(1) translateZ(0);
        transition: filter 200ms linear,
        transform 200ms linear;
    }


    .card:hover .card__background {
        transform: scale(1.05) translateZ(0);
    }


    .card-grid:hover > .card:not(:hover) .content {
        backdrop-filter: blur(20px);
        opacity: 0.1;
    }

    .card__content {
        left: 0;
        padding: var(--spacing-l);
        position: absolute;
        top: 0;
    }

    .card__category {
        color: var(--text-light);
        font-size: 0.9rem;
        margin-bottom: var(--spacing-s);
        text-transform: uppercase;
    }

    .card__heading {
        color: var(--text-lighter);
        font-size: 1.9rem;
        text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
        line-height: 1.4;
        word-spacing: 100vw;
    }
</style>
<body style="{{ Route::currentRouteNamed('home') ? 'background-color: black;' : 'background-color: #E5E1E1' }}">
<!-- ====== Navbar Section Start -->
@php
    $user = Auth::user();
@endphp

@if (request()->is('/'))
    <x-navbar.home-navbar :user="$user" :cities="$cities" :categories="$categories"/>
@elseif(request()->is('content/*') || request()->is('myEvent') || request()->is('myEvent/static/*'))
    <x-navbar.back-up-navbar :user="$user" :cities="$cities" :categories="$categories"/>
@else
    <x-navbar.authentication-navbar :user="$user" :cities="$cities" :categories="$categories"/>
@endif


<!-- ====== Navbar Section End -->

{{-- section page --}}
@yield('content')
{{-- end section --}}
<!-- ====== Footer Section Start -->
<x-footer.footer/>
<!-- ====== Footer Section End -->

<!-- ====== Back To Top Start -->
<button href="javascript:void(0)"
   class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden items-center justify-center rounded-md text-white transition duration-300 ease-in-out hover:bg-dark">
    <a href="javascript:void(0)" class="backToTopButton back-to-top">
        <svg class="svgIcon" viewBox="0 0 384 512">
            <path
                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
            ></path>
        </svg>
    </a>
</button>
<!-- ====== Back To Top End -->

<!-- ====== All Scripts -->
<script src="{{ asset('assets-home/js/search.js') }}"></script>
<script src="{{ asset('assets-home/js/countDown.js') }}"></script>
<script src="{{ asset('assets-home/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets-home/js/main.js') }}"></script>
<script src="{{ asset('assets-home/js/image-register.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const people1 = document.querySelector('.people1 img');
        const people2 = document.querySelector('.people2 img');
        const people3 = document.querySelector('.people3 img');

        window.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY;

            // Different movement speeds for each image
            const moveDistance1 = scrollPosition * 0.05; // Slowest
            const moveDistance2 = scrollPosition * 0.1; // Medium
            const moveDistance3 = scrollPosition * 0.3; // Fastest

            // Apply the movement by adjusting the 'top' style property
            people1.style.top = `calc(-31% - ${moveDistance1}px)`;
            people2.style.top = `calc(-31% - ${moveDistance2}px)`;
            people3.style.top = `calc(-31% - ${moveDistance3}px)`;
        });
    });


    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);

    // Testimonial
    const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
<script>
    function redirectToCategory(selectElement) {
        // Get the selected value
        var selectedValue = selectElement.value;

        // Check if a valid category is selected (not "Select Category")
        if (selectedValue !== '0') {
            // Build the URL using the route and selected category ID
            // Redirect to the URL
            window.location.href = "{{ route('events.category.page', ['categoryId' => ':categoryId']) }}".replace(':categoryId', selectedValue);
        }
    }
</script>
</body>

</html>
