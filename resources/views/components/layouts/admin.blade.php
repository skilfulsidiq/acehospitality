<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Apex Charts -->
    <link type="text/css" href="{{asset('vendor/apexcharts/apexcharts.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('vendor/notyf/notyf.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{asset('assets/css/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/parsley.css')}}"/>

      <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css')}}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />



    @stack('styles')
    @livewireStyles
    {{-- @vite(['resources/scss/app.scss']) --}}
    </head>
    <body >
       @include('layouts.topbar2')

                    @include('layouts.sidenav2')

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        {{ $slot }}

   <livewire:components.modal />

                       {{-- <livewire:modals/> --}}
                    </div>
                </div>
            </div>



     <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
         <script src="{{ asset('assets/libs/atpopperjs/core/umd/popper.min.js') }}"></script>

     {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> --}}

        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
         {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}


        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
           <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" ></script>
               <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" ></script>
        <!-- pace js -->
        <script src="{{ asset('assets/libs/pace-js/pace.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('assets/js/select2.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/js/parsley.min.js')}}" ></script>
        <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}" ></script>
             <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        {{-- <livewire:modals/> --}}
        <script src="{{ asset('assets/js/app.js')}}"></script>

           @livewireScripts



  {{-- <x-livewire-alert::scripts /> --}}

   @vite(['resources/js/app.js'])


    @stack('custom_script')
    </body>
</html>
