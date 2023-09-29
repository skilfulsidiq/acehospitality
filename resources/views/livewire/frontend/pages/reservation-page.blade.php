<div>
    <livewire:frontend.components.image-breadcrumb title="Rooms" />
     {{-- <livewire:frontend.components.date-picker.white class="card card-check-room check-room-hero" /> --}}



    <section id="pageTitle" class="pt-24">
        <div class="container">
            <div class="row g-0 align-items-end">
                <div class="col-12 col-xl-6">
                    <h1 class="mb-8 display-5 text-uppercase ff-heading fw-semibold">Reservation</h1>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="pb-8 ps-xl-8">
                        <div class="position-relative m-4">
                            <div class="progress bg-dark-subtle" role="progressbar" aria-label="Progress"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-square btn-primary rounded-circle">1</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">2</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-66 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">3</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reservation" class="pt-10 pb-10">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn" data-show="true"
                    style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <!-- Check date -->
                    <div class="mb-6">
                         <livewire:frontend.components.date-picker.white class="card card-check-room check-room-hero" />

                    </div>
                    <!-- /Check date -->
                    <div class="mb-8 mt-10">
                          <livewire:frontend.components.property-cards.version-one />
                        <!-- Room -->

                        <!-- /Room -->
                        <!-- Room -->

                        <!-- /Room -->
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <!-- Booking details -->
                    <div class="sticky-top sticky-top-120 mb-10" data-cue="fadeIn" data-show="true"
                        style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="card shadow-sm" data-aos-delay="300" data-aos="fade-up">
                            <div class="card-body small">
                                <h2 class="h4 text-uppercase ff-sub ls-1">Booking details</h2>
                                <hr>
                                <!-- Book Date -->
                                <div>
                                    <div>
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Check-In: <strong>19 Jul 2022</strong></span>
                                    </div>
                                    <div>
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Check-Out: <strong>20 Jul 2022</strong></span>
                                    </div>
                                    <em>(Duration of stay: <strong>1 Night</strong>)</em>
                                    <div class="mt-3">
                                        <span>
                                            <i class="hicon hicon-adults-line"></i><span>Adults:
                                            </span><strong>1</strong>
                                        </span>
                                        <span>-</span>
                                        <span>
                                            <i class="hicon hicon-child-line"></i><span>Children:
                                            </span><strong>0</strong>
                                        </span>
                                    </div>
                                </div>
                                <!-- Book Date -->
                                <hr>
                                <!-- Room list -->
                                <div>
                                    <!-- Room Item -->
                                    <div class="mb-3">
                                        <h3 class="h6 mb-0 d-flex align-items-center">
                                            <span>Imperial Suite Balcony</span>
                                            <a href="#" class="text-danger fs-6 ms-2"><i
                                                    class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                                        </h3>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Quantity <strong>1</strong>: </span>
                                            <strong class="fw-semibold fs-6"><sup>$</sup>169.00</strong>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Extra bed: </span>
                                            <strong class="fw-semibold fs-6"><sup>$</sup>15.00</strong>
                                        </div>
                                    </div>
                                    <!-- Room Item -->
                                    <!-- Room Item -->
                                    <div class="mb-3">
                                        <h3 class="h6 mb-0 d-flex align-items-center">
                                            <span>Deluxe Double or Twin</span>
                                            <a href="#" class="text-danger fs-6 ms-2"><i
                                                    class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                                        </h3>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Quantity <strong>2</strong>: </span>
                                            <strong class="fw-semibold fs-6"><sup>$</sup>269.00</strong>
                                        </div>
                                    </div>
                                    <!-- Room Item -->
                                </div>
                                <!-- Room list -->
                                <hr>
                                <!-- Total Amount-->
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="h4 mb-0">Total Amount:</h3>
                                        <strong class="fw-bold fs-4"><sup>$</sup>699.00</strong>
                                    </div>
                                    <p><em>*All taxes and fees included</em></p>
                                </div>
                                <!-- Total Amount-->
                                <hr>
                                <!-- Next step -->
                                <div class="text-end pt-2 pb-2">
                                    <a class="btn btn-primary" href="your-info.html">
                                        <span>Next step</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                                <!-- Next step -->
                            </div>
                        </div>
                    </div>
                    <!-- /Booking details -->
                </div>
            </div>
        </div>
    </section>
</div>
