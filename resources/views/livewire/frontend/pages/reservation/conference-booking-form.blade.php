<div class="glo-event-side-wrapper">

              <div class="glo-event-sidebar mb-50" data-reveal="right">
                <h3 class="glo-event-sidebar-title mb-5">Book</h3>
                <form wire:submit.prevent="submit">
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
                    <input type="email" placeholder="phone" wire:model="phone">
                    <i class="fas fa-phone"></i>
                    @error('phone')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                  </div>
                  <div class="glo-appointment-input">
                    <div class="p-relative mb-15">
                      <input type="date" wire:model="date" placeholder="Date "">
                      <i class="fas fa-calendar"></i>
                    </div>
                    @error('date')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                  </div>

                  <div class="glo-reservation-details-btn text-center">
                     <button type="submit" class="btn btn-primary w-10 btn-block">
                                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                            <span>Submit</span>
                                            <span wire:loading> checking... </span>
                                        </button>
                    {{-- <button type="submit" class=" btn btn-primary glo-btn-anim">Book Now</button> --}}
                  </div>
                </form>
              </div>
            </div>
