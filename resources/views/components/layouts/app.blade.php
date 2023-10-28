<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@includeIf('includes.head')

<body>
    <div id="loading">
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </div>
    @includeIf('includes.mobile_nav')
    @includeIf('includes.header')


    {{-- <livewire:frontend.components.header type="nav-homepage-style stricky"/> --}}
    <main>
        {{ $slot }}
         @livewire('wire-elements-modal')
    </main>
    @includeIf('includes.footer')
    {{-- <livewire:frontend.components.footer/> --}}



    @includeIf('includes.script')
    <script>
        
    </script>
    @stack('script')

</body>

</html>
