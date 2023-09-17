<div>
   {{-- @if (Route::currentRouteName()=='home') --}}
   <a class="{{ $type }} logo1" href="{{ route('home') }}"><img src="images/header-logo.svg" alt="Header Logo"></a>
   {{-- @endif --}}
    <a class="{{ $type }} logo2" href="{{ route('home') }}"><img src="images/header-logo2.svg" alt="Header Logo"></a>
</div>
