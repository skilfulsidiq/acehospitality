   {{-- <section id="testimonials" class="pt-14 pb-14">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Heading -->
                        <div class="mb-10 text-center" data-cue="fadeIn">
                            <h2 class="text-uppercase ff-heading">What our clients say</h2>
                            <p class="fs-5 fw-normal text-body-secondary">Pro sonet consul maiorum ad. Delenit omittantur ne cum gloriatur.</p>
                        </div>
                        <!-- /Heading -->
                    </div>
                    <div class="col-12">
                        <!-- Testimonials list -->
                        <div class="testimonial-slider tns-nav-dark text-center" data-cue="fadeIn">
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a1.jpg" srcset="./assets/img/avatars/a1@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>An harum accommodare ullamcorper, laoreet repudiare consetetur percipitur mel disputationi cum ex. Aliquid delicatissimi.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> John Doe <cite title="Source Title">(Italy)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a2.jpg" srcset="./assets/img/avatars/a2@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Saperet voluptatibus signiferumque no eam, laoreet eos pertinax dissentiet in. Fabulas voluptua mea te. Te per integre splendide.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emily Smith <cite title="Source Title">(France)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a3.jpg" srcset="./assets/img/avatars/a3@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ne quem tale tincidunt has, in veritus dissentiunt eum. No minim libris reformidans cum, aliquid id eum sale admodum.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Alex Mark <cite title="Source Title">(USA)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a4.jpg" srcset="./assets/img/avatars/a4@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Et tale erat pri, ea usu possim ancillae electram, dissentiunt ex dolorum admodum persecuti est. Convenire efficiendi consulatu. </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Ariol Deep <cite title="Source Title">(China)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a5.jpg" srcset="./assets/img/avatars/a5@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ei nec choro doctus, an esse postea mel, tamquam intellegam mei no. Vis pertinax ne incorrupte, ne his repudiare suscipiantur.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emma Ross <cite title="Source Title">(Australia)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                        </div>
                        <!-- /Testimonials list -->
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="glo-testimonial mb-115  pt-105">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="intro-title-wrapper text-center mb-70" data-reveal="">
              <div class="intro-subtitle">
                <span>Testimonials</span>
              </div>
              <div class="intro-title">
                <h2>Happy Customer Says</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="glo-testimonial-inner" data-reveal="">
              <div class="glo-testimonial-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">

                <div class="swiper-wrapper" id="swiper-wrapper-975fe045bc6a327c" aria-live="off" style="transform: translate3d(-1215px, 0px, 0px); transition-duration: 0ms;">
                    @php
                        $n = count($list);
                    @endphp

                   @forelse ($list as $l )
                         <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="{{ $l->id }}" role="group" aria-label="{{ $l->id }} / {{ $n}}" style="width: 440px;">
                    <div class="d">
                      <div class="glo-testimonial-review pb-20 p-relative">
                        <div class="glo-testimonial-review-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="glo-testimonial-review-quote"><img src="{{ asset('icons/quote.png') }}" alt="quote">
                        </div>
                      </div>
                      <p class="boking-client-text">“ {{ $l->comment }} ”</p>
                      <div class="line-bg pb-2 pt-2">
                        {{-- <img src="{{ asset('icons.test-line-bg.png') }}" alt="image not found"> --}}
                      </div>
                      <div class="glo-testimonial-user">

                        <div class="glo-testimonial-client-info">
                          <h3>{{ $l->fullname }}</h3>
                          <p>{{ $l->position }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                   @empty

                   @endforelse




               </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <!-- If we need pagination -->
              <div class="glo-testimonial-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
