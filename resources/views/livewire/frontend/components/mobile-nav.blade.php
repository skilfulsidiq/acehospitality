 <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#ace_mobile_menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
             <x-logo.logo-two type="mobile_logo" src="images/header-logo2.svg"/>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="ace_mobile_menu" class="">
      <ul>
        <li><a href="{{ route('home') }}"><span>Home</span></a></li>
        <li><a href="{{ route('hotel-list') }}"><span>Hotels</span></a></li>
        <li><a href="{{ route('about') }}"><span>About Us</span></a></li>
        <li><a href="{{ route('reservation-page') }}"><span>Rooms</span></a></li>
        <li><a href="{{ route('contact') }}"><span>Contact Us</span></a></li>

        <li class="px-3 mobile-menu-btn">
          <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Check Availability<i class="fal fa-arrow-right-long"></i></a>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>
