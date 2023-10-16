   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! seo() !!}

           <!-- Favicon -->
            <link href="{{ asset('favicon/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
            <link href="{{ asset('favicon/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
            <!-- Apple Touch Icon -->
          <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png')}}">
            <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png')}}">
            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png')}}">
            <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png')}}">
            <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png')}}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png')}}">
            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png')}}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png')}}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png')}}">
            <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png')}}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png')}}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png')}}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png')}}">
            <link rel="manifest" href="{{ asset('favicon/manifest.json')}}">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
            <meta name="theme-color" content="#ffffff">

            <!-- css file -->

            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">


            <link rel="stylesheet" href="{{ asset('assets/css/bundle.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/select2.css')}}">
            {{-- <link rel="stylesheet" href="assets/css/animate.min.css"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/backToTop.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
            {{-- <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/fontAwesome5Pro.css')}}">
            {{-- <link rel="stylesheet" href="{{asset('assets/css/vanilla-calendar-min.css')}}"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

            {{-- <link rel="stylesheet" href="{{ asset('assets/css/hotel-datepicker.css') }}"> --}}


            <!-- Title -->


   {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
   @vite(['resources/sass/app.scss'])
</head>
