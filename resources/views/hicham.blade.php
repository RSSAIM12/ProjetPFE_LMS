@include('layouts/header')
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        @include('layouts.mobile')
        <!-- END: Mobile Menu -->
        <div class="d-flex">
            <!-- BEGIN: Side Menu -->
            @include('layouts.sidebar')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            @include('layouts.content')
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md position-fixed bottom-0 end-0 box dark-bg-dark-2 border rounded-pill w-40 h-12 d-flex align-items-center justify-content-center z-50 mb-10 me-10">
            <div class="me-4 text-gray-700 dark-text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
@include('layouts.footer')
