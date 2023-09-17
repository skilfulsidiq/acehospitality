<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! seo() !!}

            <!-- css file -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/ace-responsive-menu.css')}}">
            <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
            <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
            <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
            <link rel="stylesheet" href="{{ asset('css/slider.css')}}">
            <link rel="stylesheet" href="{{ asset('css/style.css')}}">
            <link rel="stylesheet" href="{{ asset('css/ud-custom-spacing.css')}}">
            <!-- Responsive stylesheet -->
            <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
             <link rel="stylesheet" href="{{ asset('css/hotel-datepicker.css') }}">
            <!-- Title -->

            <!-- Favicon -->
            <link href="{{ asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
            <link href="{{ asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
            <!-- Apple Touch Icon -->
            <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <body>
        <div class="wrapper ovh">
            <div class="preloader"></div>
            {{-- @if (Route::currentRouteName()=='home') --}}
            <livewire:frontend.components.header type="nav-homepage-style stricky"/>
           {{-- @else --}}
            {{-- <livewire:frontend.components.header type="nav-innerpage-style stricky"/> --}}


            <div class="hiddenbar-body-ovelay"></div>
            <livewire:frontend.components.mobile-nav/>



            <div class="body_content_wrapper">
            {{ $slot }}



            <livewire:frontend.components.footer/>
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>



        <script src="{{ asset('js/jquery-3.6.4.min.js')}}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
        <script src="{{ asset('js/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('js/jquery.mmenu.all.js')}}"></script>
        <script src="{{ asset('js/ace-responsive-menu.js')}}"></script>
        <script src="{{ asset('js/jquery-scrolltofixed-min.js')}}"></script>
        <script src="{{ asset('js/wow.min.js')}}"></script>
        <script src="{{ asset('js/owl.js')}}"></script>
        <script src="{{ asset('js/parallax.js')}}"></script>
        {{-- <script src="{{ asset('js/pricing-slider.js')}}"></script> --}}
        {{-- Hotel pivk --}}
         <script src="{{ asset('js/fecha.min.js') }}"></script>
         <script src="{{ asset('js/hotel-datepicker.min.js') }}"></script>
        <!-- Custom script for all pages -->
        <script src="{{ asset('js/script.js') }}"></script>

         @stack('script')
    </body>
</html>
