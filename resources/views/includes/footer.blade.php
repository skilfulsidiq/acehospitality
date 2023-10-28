 {{-- <footer id="footer" class="bg-body text-body-tertiary pt-14 pb-12" data-bs-theme="dark">
        <div class="container">
            <!-- Brands system -->
            <div class="border-bottom mb-9 pb-5">
                <div class="row" data-cues="fadeIn">
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l1.png" srcset="./assets/img/logos/l1@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l2.png" srcset="./assets/img/logos/l2@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l3.png" srcset="./assets/img/logos/l3@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l4.png" srcset="./assets/img/logos/l4@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l5.png" srcset="./assets/img/logos/l5@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l6.png" srcset="./assets/img/logos/l6@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Brands system -->
            <!-- Footer top -->
            <div class="border-bottom">
                <div class="row" data-cues="fadeIn">
                    <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                        <!-- Brand -->
                        <div class="mb-8">
                            <a href="{{ route('home') }} class="d-inline-block">
                                <figure>
                                      <x-logo.main-logo type="header-logo" />
                                </figure>
                            </a>
                            <p>
                                <em>We strive for excellence through the believe that effective management and excellent relationships with the business community is undeniably important to a successful operation and profitable growth in our business.</em>
                                <a href="{{ route('about') }}" class="text-body link-hover-primary">[+]</a>
                            </p>
                        </div>
                        <!-- /Brand -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <div class="mb-8">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Contact Info</h5>
                            <div class="pt-2">
                                <p>
                                    <span>{{ $app_settings->address }}</span>
                                </p>
                                <p>
                                    <span>{{ $app_settings->phones }}</span>
                                </p>
                                <p>
                                    <a href="#" class="text-body link-hover-primary">{{ $app_settings->email }}</a>
                                </p>

                            </div>
                        </div>
                        <!-- /Contact Info -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Quick Links -->
                        <div class="mb-8">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Quick Links</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="{{ route('about') }}">Ace's Story</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="{{ route('about') }}#team">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="{{ route('hotel-list') }}">hotels</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">

                                </div>
                            </div>
                        </div>
                        <!-- /Quick Links -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <div class="mb-8">
                            <!-- Mobile App -->

                            <!-- /Mobile App -->
                            <!-- Social -->
                            <div class="mb-6">
                                <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Connect social</h5>
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
                            <!-- /Social -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer top -->
            <!-- Footer Bottom -->
            <div class="mt-9">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>© 2023 Ace Hospitality. All rights reserved.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-start text-md-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-body link-hover-primary" href="#">Privacy Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body link-hover-primary" href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Bottom -->
        </div>
    </footer> --}}
<footer class="glo-footer footer-bg">
    <div class="glo-footer-top pt-100 pb-30">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="glo-footer-widget-wrapper mb-60">
              <div class="glo-footer-widget-title">
                <h5>About Us</h5>
              </div>
              <div class="glo-footer-link">
                <ul>
                  <li><a href="{{ route('reservation-page') }}">Accommodation</a></li>
                  <li><a href="{{ route('about') }}">About Hotel</a></li>
                  <li><a href="{{ route('events') }}">Conference</a></li>
                  <li><a href="{{ route('contact') }}">Get In Touch</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="glo-footer-widget-wrapper glo-footer-contact-wrapper mb-60">
              <div class="glo-footer-widget-title">
                <h5>Get in Touch</h5>
              </div>
              <div class="glo-footer-contact">
                <ul>
                  {{-- <li><i class="fas fa-paper-plane"></i> Reception:<a href="tel:99411123456"> + 99 4 11 123 456</a></li> --}}
                  <li><i class="fas fa-phone"></i>Office: <a href="tel:{{ $app_settings->phones }}">{{ $app_settings->phones }}</a></li>
                  <li><i class="fas fa-envelope"></i> E-mail: <a href="mailto: {{ $app_settings->email }}">
                      {{ $app_settings->email }}</a></li>
                  <li><i class="fas fa-map-marker-alt"></i> Address: {{ $app_settings->address }}</li>
                </ul>
              </div>
              <div class="glo-footer-btn">
                <a class="" href="room.html"><span>Reserve Now</span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-4">
            <div class="glo-footer-widget-wrapper mb-60">
              <div class="map-widget">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1933.4650531366285!2d90.38339774053988!3d23.822306044718005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1667101349447!5m2!1sen!2sbd"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="glo-footer-bottom d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="glo-footer-copyright">
              <p>Copyright &amp; ACE Hospitality- {{ date('Y') }}</p>
            </div>
          </div>
          <div class="col-md-6 text-md-end">
            <div class="glo-footer-social">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
