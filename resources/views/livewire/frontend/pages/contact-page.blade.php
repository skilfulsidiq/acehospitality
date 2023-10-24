<div>
        <livewire:frontend.components.image-breadcrumb/>
    <div class="pt-120 pb-70 glo-contact-area">
      <div class="container">
        <div class="row ">
          <div class="col-xl-5 col-lg-5">
            <div class="glo-contact-infobox mb-50">
              <div class="intro-title-wrapper mb-50 revealed" data-reveal="">
                <div class="intro-subtitle">
                  <span>Contact With Us</span>
                </div>
                <div class="intro-title">
                  <h2>To Know More <br> About Our Hotels</h2>
                </div>
              </div>
              <div class="glo-contact-infobox revealed" data-reveal="">

                <div class="glo-contact-list">
                  <div class="glo-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="glo-contact-text">
                    <span class="glo-contact-label">Phone Number</span>
                    <h4 class="glo-contact-title"><a href="#">{{ $app_settings->phones }}</a></h4>
                  </div>

                </div>

                <div class="glo-contact-list">
                  <div class="glo-contact-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="glo-contact-text">
                    <span class="glo-contact-label">Email Address</span>
                    <h4 class="glo-contact-title"><a href="mailto: {{ $app_settings->email}}">{{ $app_settings->email }}</a></h4>
                  </div>
                </div>

                <div class="glo-contact-list">
                  <div class="glo-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="glo-contact-text">
                    <span class="glo-contact-label">Location</span>
                    <h4 class="glo-contact-title"><a href="#">{{ $app_settings->address }}</a></h4>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="col-xl-7 col-lg-7">



            <div class="glo-contact-form mb-50 revealed" data-reveal="">
              <form wire:submit.prevent="submit">
                <div class="row">
                  <div class="col-12">
                    <input type="text" placeholder="Fullname" wire:model="fullname">
                     @error('fullname')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <input type="text" placeholder="Phone Number" wire:model="phone">
                     @error('phone')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <input type="email" placeholder="Your Email" wire:model="email">
                     @error('email')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                  </div>

                  <div class="col-xl-12">
                    <textarea placeholder="Send Message" wire:model="message"></textarea>
                     @error('message')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                    <button class="glo-btn-anim" type="submit"><span>Send Message</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
         <div class="col-12">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1461&amp;height=400&amp;hl=en&amp;q=Okemisi crescent Off Twon Brass Street Area 11 Garki Abuja &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Puzzle</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
          </div>
      </div>
    </div>

</div>
