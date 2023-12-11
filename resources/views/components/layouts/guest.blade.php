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

   
    {{-- @vite(['resources/scss/app.scss']) --}}

  @vite(['resources/css/app.scss','resources/js/app.js'])



</head>

<body>



        {{ $slot }}

</body>


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
