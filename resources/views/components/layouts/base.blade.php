<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title>Landmark</title>

    <meta name="msapplication-config" content="{{asset('favicons/browserconfig.xml')}}">

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

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
    <link rel="stylesheet" href="{{asset('assets/css/parsley.css')}}"/>



    @stack('styles')
    @livewireStyles
    {{-- @vite(['resources/scss/app.scss']) --}}

  @vite(['resources/css/app.scss','resources/js/app.js'])



</head>

<body>



        {{ $slot }}

   <livewire:components.modal />









    <!-- Core -->


     <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

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



  <x-livewire-alert::scripts />

   @vite(['resources/js/app.js'])


<script>
// $(document).ready(function() {

    // $('.select2').select2();
    // $('.appform').parsley();
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
// });
   function formatCurrency(val){
        return Number(val).toLocaleString()
    }
    function simplifyNumber(value){
        var val = Math.abs(value)
        var result = val;
        if (val >= 1000 && val < 1000000) {
            val =  (val / 1000).toFixed(0) + ' K'
        }

        else if(val>=1000000 && val < 1000000000 ){
                // v = formatToCurrency(val);
               val =  (val / 1000000).toFixed(0) + ' M'
        }
        else if(val>=1000000000){
                // v = formatToCurrency(val);
               val =  (val / 1000000000).toFixed(0) + ' B'
        }
        return val

    }

</script>


@stack('custom_script')
</body>

</html>
