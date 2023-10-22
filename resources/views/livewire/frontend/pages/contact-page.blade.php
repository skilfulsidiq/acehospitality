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
              <form action="#">
                <div class="row">
                  <div class="col-xl-6 col-lg-6">
                    <input type="text" placeholder="First Name">
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <input type="text" placeholder="Last Name">
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <input type="email" placeholder="Your Email">
                  </div>

                  <div class="col-xl-12">
                    <textarea placeholder="Send Message"></textarea>
                    <button class="glo-btn-anim" type="submit"><span>Send Message</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
