<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/img/apple-icon.png') }}" />
    <link rel="shortcut icon" href="home/images/logo/logo-uiverse.png" type="image/x-icon" />
    <title>Dashboard | @yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Include this in the <head> section of your HTML -->
    <link href="https://cdn.tailwindcss.com/3.0.24/tailwind.min.css" rel="stylesheet">
    <!-- Tailwind cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('./assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- cards -->
    <link rel="stylesheet" href="{{ asset('./assets/css/cards.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- buttons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link href="{{ asset('./assets/css/button.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('./assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <!-- Tailwind cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- AlphineJS cdn -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Main Styling -->
    <link href="{{ asset('./assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite cdn -->

</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
    <!-- sidenav  -->
    <x-sidebar.dashboard-sidebar />
    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">

        <!-- Navbar -->
        <x-navbar.dashboard-navbar />

        <!-- end Navbar -->

        @yield('main')

    </main>

    @yield('content')

</body>
<!-- plugin for charts  -->
<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('./assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('./assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>

<script src="{{ asset('./assets/js/role.js') }}"></script>

</html>
