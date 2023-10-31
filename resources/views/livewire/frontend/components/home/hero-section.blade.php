  <section class="glo-banner-area">
      <div class="glo-banner-bg p-relative">
          <div class="swiper-container  glo-banner-active">
              <div class="swiper-wrapper">

                {{-- @forelse (json_decode($app_settings->sliders)  as $slider )
                    {{ $slider }}
                @empty

                @endforelse --}}
                  <!-- slide 1 -->
                  <div class="swiper-slide">
                      <div class="glo-banner-slider p-relative">
                          <div class="glo-banner-img" style="background-image: url({{ asset('assets/media/hotels/premier/three.png') }})">
                              {{-- <img src="assets/img/hero/h1.jpg" alt="image not found"> --}}

                          </div>
                          <div class="container">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-md-12">
                                      <div class="glo-banner-content">
                                          {{-- <span class="animate__animated" data-animation="fadeInUp" data-delay=".2s"
                                              style="animation-delay: 0.2s;">peaceful
                                              environment</span> --}}
                                          <h1 class="animate__animated text-white" data-animation="fadeInUp"
                                              data-delay=".4s" style="animation-delay: 0.4s;">
                                             Welcome
                                              <br>
                                              to Great Ambience
                                          </h1>
                                          <div class="animate__animated" data-animation="fadeInUp" data-delay=".6s"
                                              style="animation-delay: 0.6s;">
                                              <div class="glo-banner-action-wrapper flex-wrap">
                                                  <div class="glo-banner-action-btn">
                                                      <a class="glo-btn-anim btn-black"
                                                          href="{{ route('reservation-page') }}"><span>Check
                                                              Availability</span></a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
                  <!-- slide 2  -->
                  <div class="swiper-slide">
                      <div class="glo-banner-slider p-relative">
                          <div class="glo-banner-img" style="background-image: url({{ asset('assets/media/hotels/Catolic/one.png') }})">
                              {{-- <img src="assets/img/hero/h1.jpg" alt="image not found"> --}}
                          </div>
                          <div class="container">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-md-12">
                                      <div class="glo-banner-content">
                                          {{-- <span class="animate__animated" data-animation="fadeInUp" data-delay=".2s"
                                              style="animation-delay: 0.2s;">peaceful
                                              environment</span> --}}
                                          <h1 class="animate__animated text-white" data-animation="fadeInUp"
                                              data-delay=".4s" style="animation-delay: 0.4s;">
                                              Welcome
                                              <br>
                                              to Serenity
                                          </h1>
                                          <div class="animate__animated" data-animation="fadeInUp" data-delay=".6s"
                                              style="animation-delay: 0.6s;">
                                              <div class="glo-banner-action-wrapper flex-wrap">
                                                  <div class="glo-banner-action-btn">
                                                      <a class="glo-btn-anim btn-black"
                                                          href="{{ route('reservation-page') }}"><span>Check
                                                              Availability</span></a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
                  <!-- slide 3  -->
                  <div class="swiper-slide">
                      <div class="glo-banner-slider p-relative">
                          <div class="glo-banner-img" style="background-image: url({{ asset('assets/media/hotels/residents/three.png') }})">
                              {{-- <img src="assets/img/hero/h4.jpg" alt="image not found"> --}}
                          </div>
                          <div class="container">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-md-12">
                                      <div class="glo-banner-content">
                                          {{-- <span class="animate__animated" data-animation="fadeInUp" data-delay=".2s"
                                              style="animation-delay: 0.2s;">peaceful
                                              environment</span> --}}
                                          <h1 class="animate__animated text-white" data-animation="fadeInUp"
                                              data-delay=".4s" style="animation-delay: 0.4s;">
                                              Enjoy Our
                                              <br>
                                              Luxury Rooms
                                          </h1>
                                          <div class="animate__animated" data-animation="fadeInUp" data-delay=".6s"
                                              style="animation-delay: 0.6s;">
                                              <div class="glo-banner-action-wrapper flex-wrap">
                                                  <div class="glo-banner-action-btn">
                                                      <a class="glo-btn-anim btn-black"
                                                          href="{{ route('reservation-page') }}"><span>Check
                                                              Availability</span></a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="glo-banner-navigation">
                  <button class="glo-banner-button-prev">
                      <i class="far fa-long-arrow-left"></i>
                  </button>
                  <button class="glo-banner-button-next">
                      <i class="far fa-long-arrow-right"></i>
                  </button>
              </div>
          </div>
      </div>

      <div>

      </div>

  </section>
