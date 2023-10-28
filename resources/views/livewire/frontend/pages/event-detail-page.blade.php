<div>
    <livewire:frontend.components.image-breadcrumb title="{{ $details->name }}"/>
<section class="gl-event-details-area pt-120 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="glo-event-details-wrapper mb-45">
              <div class="glo-event-details-thumb img-hover mb-50 revealed" data-reveal="">
                <img src="{{ asset($details->images) }}" alt="">
              </div>
              <div class="glo-event-details-content mb-50">
                <h3 class="glo-event-details-title mb-10" data-reveal="">{{ $details->name }}</h3>
                <p class="glo-event-details-desc mb-50" data-reveal="">With regard to a December religious feast of the deified Sun, as distinct from a solstice feast of the birth of the astronomical sun, Hijmans has commented that "while the winter solstice on or around December 25 was well established in the Roman imperial calendar, there is no evidence that a religious celebration of Sol on that day antedated the celebration of Christmas.The Oxford Companion to Christian Thought remarks on the uncertainty about the order of precedence between the religious celebrations of the Birthday of the Unconquered Sun and of the birthday of Jesus, stating that the hypothesis that December 25 was chosen for celebrating the birth of Jesus on the basis of the belief that his conception occurred on March 25 "potentially establishes 25 December as a Christian festival before Aurelian's decree, which, when promulgated, might have provided for the Christian feast both opportunity and challenge.</p>
                <div class="glo-event-details-imagbox">
                  <div class="glo-event-thumb img-hover mb-30" data-reveal="left">
                    <img src="{{ asset($details->images) }}"alt="">
                  </div>
                  <div class="glo-event-thumb img-hover mb-30" data-reveal="right">
                    <img src="{{ asset($details->images) }}" alt="">
                  </div>
                </div>



              </div>
              <div class="glo-event-line mb-50"></div>

            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            {{-- <livewire:frontend.pages.reservation.conference-booking-form/> --}}
            <div class="glo-event-side-wrapper">

              <div class="glo-event-sidebar mb-50" data-reveal="right">
                <h3 class="glo-event-sidebar-title mb-5">Book</h3>
                <form wire:submit="submit">
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
          </div>
        </div>
      </div>
    </section>
</div>
