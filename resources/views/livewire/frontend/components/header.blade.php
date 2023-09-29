<div>
      <div class="glo-side-info">
    <div class="glo-side-logo-wrapper">
      <div class="glo-side-logo"><a href="index.html"><img src="assets/img/logo/glorio-logo.svg" alt="glorio"></a>
      </div>
      <button class="glo-side-info-close"><i class="fal fa-times"></i></button>
    </div>
    <div class="glo-side-content">
      <div class="glo-mobile-menu-pos"></div>
      <p>A traveler’s choice of hotel is a important ingredient of a sublime vacation as it has the
        ability to make or break one’s experience. Choosing a perfect hotel for your vacation.</p>
      <div class="glo-offcanvas-instafeed">
        <span>Instagram Feed :</span>
        <div class="glo-offcanvas-instafeed-thumb">
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/1.jpg" alt="Image not found">
          </div>
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/2.jpg" alt="Image not found">
          </div>
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/3.jpg" alt="Image not found">
          </div>
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/4.jpg" alt="Image not found">
          </div>
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/5.jpg" alt="Image not found">
          </div>
          <div class="img-hover overlay">
            <img src="assets/img/gallery/footer/6.jpg" alt="Image not found">
          </div>
        </div>
      </div>
      <div class="glo-offcanvas-social">
        <span>follow :</span>
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-behance"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
        </ul>
      </div>
      <div class="glo-offcanvas-btn d-inline-flex">
        <a class="glo-btn-anim btn-theme-3" href="booking-form.html"><span>Reservation <i class="far fa-long-arrow-right"></i></span></a>
      </div>
    </div>
  </div>
  <div class="offcanvas-overlay"></div>

  <header class="glo-header-area glo-header-3">
    <!-- header top area -->

  <!-- header top end area -->

  <!--header area starts-->
  <div class="glo-header-bottom sticky" id="header-sticky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-4 col-4">
          <div class="glo-header-logo">
             <x-logo.main-logo type="header-logo" />
            {{-- <a href="index.html"><img src="assets/img/logo/glorio-logo.svg" alt="glorio"></a> --}}
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block">
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
        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-8 col-8">
          <div class="header-right justify-content-end align-items-center">
            <div class="header-button d-none d-xl-block">
              <div class="d-none d-md-flex glo-header-btn-2">
                <a class="glo-btn-anim btn-theme-3" href="{{ route('reservation-page') }}"><span>Check Availability
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
</div>


