<div>

     <livewire:frontend.components.image-breadcrumb title="{{ $hotel->hotel_name }}" />
    {{-- <livewire:frontend.components.hotel-detail.hero-section /> --}}
    {{-- <livewire:frontend.components.frontend-availability-form style="margin-top:15rem" /> --}}
     <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" location_id="{{ $hotel->location_id }}" hotel_id="{{ $hotel->id }}" />

    <section class="glo-features-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-9">
            <div class="intro-title-wrapper-3 mb-70">
                <span class="intro-subtitle-3 revealed" data-reveal="">About</span>
                <h2 class="intro-title-3 revealed" data-reveal="">{{ $hotel->hotel_name }} <br></h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="glo-features-shape-wrapper mb-70 revealed" data-reveal="right">
              <div class="glo-features-shape text-md-end">
                {{-- <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found"> --}}
                <img src="{{ asset('logo/logo.jpeg')}}" alt="batch" style="width:150px;height:150px; border-radius:50%">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="glo-features-thumb revealed" data-reveal="">
              <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="glo-feature">
              <div class="glo-feature-content revealed" data-reveal="">
                {!!  $hotel->hotel_desc !!}
                {{-- <p>Our mission at Agoda is to make affordable travel accessible to more people, and to deliver
                  affordable and enjoyable travel experiences that are seamless from end to end. By seamless,
                  we mean hassle-free from the moment you start planning your trip.</p>
                <p>To get to our goal, we’ve spent the last 16 years building agoda.com and the Agoda app to
                  make searching and booking travel as easy and stress-free as it ought to be.</p> --}}
              </div>
              <div class="glo-feature-thumb-wrapper revealed" data-reveal="">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="glo-features-thumb">
                        @php
                            $images = explode(",", $hotel->hotel_images);
                        @endphp
                      <img src="{{ asset($images[0]) }}" alt="Image not found">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="glo-features-thumb glo-features-thumb-3">
                      <img src="{{ asset($images[1])}}" alt="Image not found">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- PAckges --}}
    <section class="glo-room3-area pt-75 pb-">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="intro-title-wrapper-2 mb-50 revealed" data-reveal="">
              <span class="intro-subtitle-3">Rooms</span>
              <h3 class="intro-title-3">{{ $hotel->hotel_name }} ROOMS</h3>
            </div>
          </div>
        </div>
        <!-- 2nd row start -->
        <!-- 2nd row start -->
        <div class="row">
            @forelse ($hotel->roomGroup as $room )
                 <div class="col-xl-3 col-md-6">
            <div class="glo-room3-item mb-30 revealed" data-reveal="">
                <div class="glo-room3-thumb" data-background="{{ asset($room->images) }}" style="background-image: url({{ asset($room->images) }});">
                  <div class="glo-room3-content">
                    <div class="glo-room3-title-wrapper">
                      <span class="glo-room3-price">N{{ number_format($room->price )}}/Night</span>
                      <h3 class="glo-room3-title mt-10">{{ $room->name }}</h3>
                    </div>
                  </div>
                </div>

               <div class="glo-room3-hover-content">
                  <h3 class="glo-room3-title">{{ $room->name }}</h3>
                  <p class="glo-room3-desc mb-20">I felt calm and was able to effectively interact.</p>
                  <ul class="glo-room3-list mb-40">
                    <li class="glo-room3-list-item"><i class="fal fa-users-crown"></i> 1-2 persons</li>
                    {{-- <li class="glo-room3-list-item"><i class="far fa-bed"></i> Twin bed</li> --}}
                    <li class="glo-room3-list-item"><i class="far fa-wifi"></i> Free wifi</li>
                    <li class="glo-room3-list-item"><i class="far fa-coffee"></i> Breakfast</li>
                  </ul>
                  <div class="glo-room3-btn">
                    <a class="glo-btn-anim" href="#check-availability"><span>Book Now</span></a>
                  </div>
                </div>
            </div>
          </div>
            @empty

            @endforelse
        </div>
      </div>
    </section>



   <div class="container">
     <div class="service-features mb-60">
                <h4 data-reveal="" class="revealed">Core Amenities</h4>
                <div class="service-feature-list revealed" data-reveal="">
                  <span>Restaurant Service</span>
                  <span>Room service</span>
                  <span>Car Park</span>
                  {{-- <span>Turndown service</span> --}}
                  <span>Catering services</span>
                </div>
              </div>
   </div>

</div>
