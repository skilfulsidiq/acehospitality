<div>
    <livewire:frontend.components.image-breadcrumb title="Rooms" />

    <section id="reservation" class="pt-10">
        <div class="container">
            <div class="row g-0 justify-item-center align-items-end">
                <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn" data-show="true"
                        style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <h1 class="mb-5 display-3 text-uppercase ff-heading fw-semibold">Reservation</h1>

                    <div class="mb-6">
                           <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" />
                        </div>
                        <!-- /Check date -->
                        <div class="mb-8">
                             <livewire:frontend.pages.reservation.step-one />
                        </div>
                    {{-- <div class="pb-8 ps-xl-8 pe-xl-8 booking-step ">
                        <div class="position-relative m-5 mb-10">
                            <div class="progress bg-dark-subtle" role="progressbar" aria-label="Progress"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-square @if ($step <= 1) btn-primary @elseif ($step > 1) btn-success @else btn-secondary @endif   rounded-circle">1</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-square @if ($step == 2) btn-primary @elseif ($step > 2) btn-success @else btn-secondary @endif rounded-circle">2</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-66 translate-middle btn btn-sm btn-square @if ($step == 3) btn-primary @elseif ($step > 3) btn-success @else btn-secondary @endif rounded-circle">3</a>
                            <a href="javascript:void(0);"
                                class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-square {{ $step == 4 ? 'btn-primary ' : 'btn-secondary' }} rounded-circle">4</a>
                        </div>
                    </div> --}}

                    {{-- @if ($step == 1)
                        <livewire:frontend.pages.reservation.step-one />
                    @endif
                    @if ($step == 2)
                        <livewire:frontend.pages.reservation.step-two />

                    @endif
                    @if ($step == 3)
                        <livewire:frontend.pages.reservation.step-three />
                    @endif
                        @if ($step == 4)
                            <livewire:frontend.pages.reservation.step-four />

                        @endif
                </div> --}}
                </div>
                <div class="row">
                    <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn" data-show="true"
                        style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <!-- Check date -->
                        <div class="mb-6">
                           <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" />
                        </div>
                        <!-- /Check date -->
                        <div class="mb-8">
                             <livewire:frontend.pages.reservation.step-one />
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <!-- Booking details -->
                        <div class="sticky-top sticky-top-120 mb-10" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
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
                                                <i class="hicon hicon-adults-line"></i><span>Adults: </span><strong>1</strong>
                                            </span>
                                            <span>-</span>
                                            <span>
                                                <i class="hicon hicon-child-line"></i><span>Children: </span><strong>0</strong>
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
                                                <a href="#" class="text-danger fs-6 ms-2"><i class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
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
                                                <a href="#" class="text-danger fs-6 ms-2"><i class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
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

    <div>
        @if ($step == 1)
            <div class="modal fade" id="booking-details-modal" aria-hidden="true" data-bs-backdrop="static"
                data-bs-keyboard="false" aria-labelledby="booking-details-modalLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="h4 text-uppercase text-center ff-sub ls-1">Booking details</h4>
                            <button type="button" wire:click="clearCart" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:frontend.components.reservation.details />
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                            @if (count(cartList()) > 0)
                                <button class="btn btn-primary" wire:click="nextStep" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">
                                    <span>Proceed</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @if (count(cartList()) > 0)
        <div class="reservation-bottom d-flex justify-content-center p-5">
            @if ($step < 2)
                <div class="text-end pt-2 pb-2">
                    <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal"
                        data-bs-target="#booking-details-modal">
                        <span>View Booking Details</span>
                        <i class="hicon hicon-flights-one-ways"></i>
                    </a>
                </div>
            @else
                <div class="d-flex">
                    <div class="text-end pt-2 pb-2">
                        <button type="button" class="btn btn-outline-light bg-light" wire:click="previousStep">
                            <span>Back</span>
                            <i class="hicon hicon-flights-one-ways"></i>
                        </button>
                    </div>
                    <div class="mx-5"></div>
                    <div class="text-end pt-2 pb-2 ">
                        <a class="btn btn-primary" href="javascript:;" wire:click="nextStep">
                            <span>Next step</span>
                            <i class="hicon hicon-flights-one-ways"></i>
                        </a>
                    </div>
                </div>
            @endif
        </div>

    @endif


</div>


{{-- @push('script')
    <script>
        // Toggle the bottom sheet when the button is clicked
        document.getElementById('toggleBottomSheet').addEventListener('click', function() {
            $('#bottomSheet').modal('toggle');
        });
    </script>
@endpush --}}
