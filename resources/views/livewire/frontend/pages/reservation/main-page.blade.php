<div>
     @php
                                        $grand_total=0;
                                        $sub_total=0;
                                    @endphp
    <livewire:frontend.components.image-breadcrumb title="Rooms" />
    <section id="reservation" class="pt-10 pb-10">
        <div class="container">
            <div class="row g-0 mt-10">
                <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn" data-show="true"
                    style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <!-- Check date -->
                    <div class="mb-6 mt-5">
                        <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" />

                    </div>
                    <!-- /Check date -->
                    <div class="mb-8">
                          @forelse ($available_rooms as $key=> $room )
                             <livewire:frontend.components.property-cards.version-one :room="$room" :date="$date" wire:key="{{ $key }}"  />
                        @empty

                        @endforelse
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
                                    @forelse ($cart as $c)
                                        @php
                                            $sub = $c['price'] * $c['quantity'] * $c['attributes']['night'];
                                            $grand_total += $sub;
                                        @endphp
                                        <div class="mb-3">
                                            <span>{{ $c['attributes']['arrival'] }} -
                                                {{ $c['attributes']['departure'] }} <em>(Night:
                                                    <strong>{{ $c['attributes']['night'] }} </strong>)</em></span>
                                            <h3 class="h6 mb-0 d-flex align-items-center">
                                                <span>{{ $c['name'] }}</span>
                                                <a href="#" wire:click="removeItem({{ $c->id }})" class="text-danger fs-6 ms-2"><i
                                                        class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                                            </h3>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Quantity <strong>{{ $c['quantity'] }}</strong>: </span>
                                                <strong
                                                    class="fw-semibold fs-6"><sup>N</sup>{{ number_format($c['price']) }}</strong>
                                            </div>

                                        </div>


                                    @empty
                                        <div class="text-center"> No Selected Room</div>
                                    @endforelse
                                    <!-- Room list -->
                                    <hr>
                                    @if (count(cartList()) > 0)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="h4 mb-0">Total Amount:</h3>
                                            <strong
                                                class="fw-bold fs-4"><sup>N</sup>{{ number_format($grand_total) }}</strong>
                                        </div>
                                        <p><em>*All taxes and fees included</em></p>
                                         <form wire:submit.prevent="submitReservation"   novalidate="">
                                    <!-- Heading -->
                                    {{-- <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">2. Your information</h2> --}}
                                    <hr>
                                    <!-- /Heading -->
                                    <!-- Information -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourFullname">Full Name<span class="text-danger">*</span></label>
                                                <input type="text" wire:model="fullname" class="form-control shadow-sm" id="txtYourFullname" placeholder="" required="">
                                                 @error('fullname')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourPhone">Phone<span class="text-danger">*</span></label>
                                                <input type="text" wire:model="phone" class="form-control shadow-sm" id="txtYourPhone" placeholder="" required="">
                                                 @error('phone')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourEmail">Email<span class="text-danger">*</span></label>
                                                <input type="email" wire:model="email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="">
                                                 @error('email')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourEmail">Confirm Email<span class="text-danger">*</span></label>
                                                <input type="email" wire:model="confirm-email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="">
                                                 @error('confirm-email')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>






                                    </div>
                                     <div class="mb-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary w-10 btn-block">
                                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                            <span>Submit</span>
                                            <span wire:loading> checking... </span>
                                        </button>
                                    </div>
                                    <!-- Information -->
                                </form>

                                        <!-- Total Amount-->
                                        {{-- <hr> --}}

                                        {{-- <a class="btn btn-sm btn-outline-light bg-light d-block shadow-sm" href="javascript:;" wire:click="clearCart">
                                                    <i class="hicon hicon-80 hicon-line-close"></i>
                                                    <span>Clear</span>
                                                </a> --}}
                                    @endif
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
