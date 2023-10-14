<header class="glo-header-area glo-header-3">
    <!-- header top area -->

  <!-- header top end area -->

  <!--header area starts-->
  <div class="glo-header-bottom sticky" id="header-sticky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-1 col-6">
        {{-- <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-2 col-2"> --}}
          <div class="glo-header-logo">
             <x-logo.main-logo type="header-logo" />
            {{-- <a href="index.html"><img src="assets/img/logo/glorio-logo.svg" alt="glorio"></a> --}}
          </div>
        </div>
        <div class="col-md-8 d-none d-lg-block">
        {{-- <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8 d-none d-lg-block"> --}}
          <div class="mean-menu-wrapper d-flex align-content-center justify-content-center">
            <div class="main-menu d-none d-lg-block">
              <nav id="mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('hotel-list') }}">Hotel</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('reservation-page') }}">Rooms</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class=" col-md-3 col-6">
        {{-- <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-2 col-2"> --}}
          <div class="header-right justify-content-end align-items-center">
            <div class="header-button d-none d-xl-block">
              <div class="d-none d-md-flex glo-header-btn-2">
                <a class="glo-btn-anim btn-theme-3" href="{{ route('reservation-page') }}"><span>Reservation
                  <i class="far fa-long-arrow-right"></i></span></a>
              </div>
            </div>
            {{-- <div class="header-search d-none d-lg-block">
              <button class="glo-search-open-btn"><i class="far fa-search"></i></button>
            </div> --}}
            <div class="glo-header-action">
              <div class="header-humburger">
                <button class="glo-sidebar-action"><img src="{{ asset('assets/icons/hamburger-white.png') }}"
                    alt="Image not found"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header area end-->

  </header>
