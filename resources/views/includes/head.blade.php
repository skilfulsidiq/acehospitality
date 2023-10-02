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
