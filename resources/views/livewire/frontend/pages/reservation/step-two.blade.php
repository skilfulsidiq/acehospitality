<section id="reservation" class="pt-10 pb-14">
            <div class="container">
                <div class="row g-0 g-lg-8" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="col-12 col-xl-6 col-lg-5 pb-8 pb-lg-0">
                        <!-- Booking details -->
                        <div class="card bg-white shadow-sm h-100 card-selected" data-aos-delay="300" data-aos="fade-up">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">1. Booking details</h2>
                                    <a href="reservation.html" class="fw-semibold text-secondary link-hover-primary d-inline-block">
                                        <i class="hicon hicon-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                </div>
                                <hr>
                                <!-- Book Date -->
                                 <livewire:frontend.components.reservation.details/>
                                <!-- Total Amount-->
                            </div>
                        </div>
                        <!-- /Booking details -->
                    </div>
                    <div class="col-12 col-xl-6 col-lg-7">
                        <!-- Your Information -->
                         <livewire:frontend.components.reservation.info-form/>
                        <!-- Your Information -->
                    </div>
                </div>
            </div>
        </section>
