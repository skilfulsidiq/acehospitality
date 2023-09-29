<div>
      <header id="header" class="header transition-base fixed-top z-1030  " data-bs-theme="dark">
        <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
            <div class="container justify-content-end">
                <!-- Brand -->
                  <x-logo.main-logo type="header-logo" />
                <!-- /Brand -->
                <!-- offcanvas Navbar -->
                <div class="offcanvas offcanvas-navbar offcanvas-end border-start-0" tabindex="-1" id="offcanvasNavbar">
                    <!-- Offcanvas header -->
                    <div class="offcanvas-header border-bottom">
                        <h3 class="offcanvas-title text-uppercase ff-heading" id="bdSidebarOffcanvasLabel">ACE</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- /Offcanvas header -->
                    <div class="offcanvas-body justify-content-end">
                        <!-- Navbar nav-->
                        <ul class="navbar-nav align-items-xl-center me-xl-3 mb-3 mb-xl-0">
                            <li class="nav-item ">
                                <a class="nav-link  text-uppercase active" href="{{ route('home')}}" data-bs-display="static">
                                    <span>Home</span>
                                    {{-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> --}}
                                </a>

                            </li>
                            <li class="nav-item ">
                                  <a class="nav-link  text-uppercase " href="{{ route('hotel-list') }}" data-bs-display="static">
                                    <span>Hotels</span>
                                    {{-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item ">
                                  <a class="nav-link  text-uppercase " href="{{ route('about') }}" data-bs-display="static">
                                    <span>About Us</span>
                                    {{-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item ">
                                  <a class="nav-link  text-uppercase active" href="{{ route('reservation-page') }}" data-bs-display="static">
                                    <span>Rooms</span>
                                    {{-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item ">
                                  <a class="nav-link  text-uppercase active" href="{{ route('contact') }}" data-bs-display="static">
                                    <span>Contact Us</span>
                                    {{-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> --}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#ocRightInfo">
                                    <i class="hicon hicon-bold hicon-instant"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /Navbar nav -->
                        <!-- Sub Links -->
                        <div class="d-flex flex-column flex-xl-row align-items-xl-center small">
                            <!-- Language & Currency -->

                            <!-- /Language & Currency -->
                            <!-- Reservation -->
                            <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                                <a  href="{{ route('home') }}#availability-check" class="btn btn-primary">
                                    <i class="hicon hicon-24hour-room-service"></i>
                                    <span>Reservation</span>
                                </a>
                            </div>
                            <!-- /Reservation -->
                        </div>
                        <!-- /Sub Links -->
                    </div>
                </div>
                <!-- /offcanvas Navbar -->
                <!-- Account link -->

                <!-- /Account link -->
                <!-- Nav toggler -->
                <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- /Nav toggler -->
            </div>
        </nav>
    </header>


    <div class="offcanvas offcanvas-end border-start-0 text-body-tertiary" tabindex="-1" id="ocRightInfo" aria-labelledby="ocRightInfo" data-bs-theme="dark">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Brand -->
            <div class="mb-10">
                <a href="index-2.html">
                    <img class="logo-light" src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Bilury Hotel" title="Bilury Hotel">
                </a>
            </div>
            <!-- /Brand -->
            <!-- Contact Info -->
            <div class="mb-10">
                <h6 class="text-uppercase ls-1 ff-sub">Contact Info</h6>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-flights-pin"></i>
                    </span>
                    <span class="flex-grow-1">610 Placer Loquen, Paris, France.</span>
                </div>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-telephone"></i>
                    </span>
                    <span>+33 (0) 1 89 78 67 56</span>
                </div>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-email-envelope"></i>
                    </span>
                    <span>Booking@example.com</span>
                </div>
            </div>
            <!-- /Contact Info -->
            <!-- Learn more -->
            <div class="mb-10">
                <h6 class="text-uppercase ls-1 ff-sub">Learn more</h6>
                <ul class="list-unstyled">
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="about.html">Bilury's Story</a></li>
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Terms of Use</a></li>
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- /Learn more -->
            <!-- Follow Us -->
            <div>
                <h6 class="text-uppercase ls-1 ff-sub">Follow Us</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                <path d="M10 9l5 3l-5 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 20l4 -9"></path>
                                <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Follow Us -->
        </div>
    </div>
</div>












