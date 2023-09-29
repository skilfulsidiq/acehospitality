<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! seo() !!}

           <!-- Favicon -->
            <link href="{{ asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
            <link href="{{ asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
            <!-- Apple Touch Icon -->
            <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
            <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

            <!-- css file -->

            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

            <link rel="stylesheet" href="{{ asset('assets/css/bundle.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
            {{-- <link rel="stylesheet" href="assets/css/animate.min.css"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/backToTop.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/fontAwesome5Pro.css')}}">
            {{-- <link rel="stylesheet" href="{{asset('assets/css/vanilla-calendar-min.css')}}"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/css/hotel-datepicker.css') }}">


            <!-- Title -->


   {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
   @vite(['resources/sass/app.scss'])
</head>
    <body >
     <div id="loading">
    <div id="preloader">
      <div id="loader"></div>
    </div>
  </div>

        <livewire:frontend.components.header type="nav-homepage-style stricky"/>
    <main>
         {{ $slot }}
    </main>
     <livewire:frontend.components.footer/>



            <script src="{{ asset('js/jquery-3.6.4.min.js')}}"></script>
                <script src="{{ asset('js/popper.min.js')}}"></script>
                <script src="{{ asset('js/bootstrap.min.js')}}"></script>
                  <script src="{{ asset('assets/js/bundle.min.js') }}"></script>

        <script src="{{ asset('assets/js/vendor/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/meanmenu.js')}}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.js')}}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <script src="{{ asset('assets/js/backToTop.js')}}"></script>
        <script src="{{ asset('assets/js/nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/counterup.min.js')}}"></script>
        {{-- <script src="{{ asset('assets/js/ajax-form.js')}}"></script> --}}
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/vanilla-calendar-min.js')}}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick-animation.min.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
        <script src="{{ asset('assets/js/fecha.min.js') }}"></script>

         <script src="{{ asset('assets/js/hotel-datepicker.min.js') }}"></script>



       <script>
                var demo2 = new HotelDatepicker(
                    document.querySelector("#hotel-picker"),
                    {
                        inline: false,
                           topbarPosition: "top",
                    }
                );
        </script>
        </script>
         @stack('script')
    </body>
</html>
