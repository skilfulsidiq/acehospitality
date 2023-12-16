<div>
    <livewire:frontend.components.image-breadcrumb title="{{ $details->name }}" />
    <section class="gl-event-details-area pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="glo-event-details-wrapper mb-45">
                        <div class="glo-event-details-thumb img-hover mb-50 revealed" data-reveal="">
                            <img src="{{ asset($images[0]) }}" alt="">
                        </div>
                        <div class="glo-event-details-content mb-50">
                            <h3 class="glo-event-details-title mb-10" data-reveal="">{{ $details->name }}</h3>
                            <p class="glo-event-details-desc mb-50" data-reveal="">
                                {{$details->desc}}
                            </p>
                            <div class="glo-event-details-imagbox">
                                <div class="glo-event-thumb img-hover mb-30" data-reveal="left">
                                    <img src="{{ asset($images[1]) }}" alt="">
                                </div>
                                <div class="glo-event-thumb img-hover mb-30" data-reveal="right">
                                    <img src="{{ asset($images[2]) }}" alt="">
                                </div>
                            </div>



                        </div>
                        <div class="glo-event-line mb-50"></div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    {{--
                    <livewire:frontend.pages.reservation.conference-booking-form /> --}}
                    <div class="glo-event-side-wrapper">

                        <div class="glo-event-sidebar mb-50" >
                            <h3 class="glo-event-sidebar-title mb-5">Book</h3>
                            <form wire:submit.prevent="submit">
                                <input type="hidden" wire:model='hotel_id' hidden>
                                <div class="glo-appointment-input mb-2">
                                    <input type="text" placeholder="Full Name" wire:model="fullname">
                                    <i class="fas fa-user"></i>
                                    @error('fullname')
                                    <span class="error-booking-form">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="glo-appointment-input mb-2">
                                    <input type="email" placeholder="Email Address" wire:model="email">
                                    <i class="fas fa-envelope"></i>
                                    @error('email')
                                    <span class="error-booking-form">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="glo-appointment-input mb-2">
                                    <input type="number" placeholder="phone" wire:model="phone">
                                    <i class="fas fa-phone"></i>
                                    @error('phone')
                                    <span class="error-booking-form">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="glo-appointment-input mb-2">
                                    <label for="">Start Date</label>
                                    <div class="p-relative ">
                                        <input type="date" wire:model="start_date" placeholder="Date "">
                      <i class=" fas fa-calendar"></i>
                                    </div>
                                    @error('start_date')
                                    <span class="error-booking-form">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="glo-appointment-input" >
                                    <label for="">End Date</label>
                                    <div class="p-relative ">
                                        <input type="date" wire:model="end_date" placeholder="Date "">
                      <i class=" fas fa-calendar"></i>
                                    </div>
                                    @error('end_date')
                                    <span class="error-booking-form">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="glo-reservation-details-btn text-center">
                                    <button type="submit" class="btn btn-primary w-10 btn-block">
                                        <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                        <span>Submit</span>
                                        {{-- <span wire:loading> checking... </span> --}}
                                    </button>
                                    {{-- <button type="submit" class=" btn btn-primary glo-btn-anim">Book Now</button>
                                    --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
