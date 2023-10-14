<div>
    <x-app-modal>
        <x-slot name="id">{{ $room->id }}</x-slot>
        <x-slot name="title">{{ $room->name}}</x-slot>
        <x-slot name="body">
            <div class="blog__main-wrapper mb-30">
              <div class="glo-reservation-details">
                <div class="glo-reservation-details-thumb mb-55 revealed" data-reveal="">
                  <div class="img-hover overlay">
                    <img src="assets/img/reservation/details-1.jpg" alt="Image not found">
                  </div>
                </div>
                <div class="glo-reservation-details-content">
                  {{-- <h2 class="glo-reservation-details-title mb-25 revealed" data-reveal="">Single Luxury Room</h2> --}}
                  <div class="glo-reservation-info-wrapper2 mb-10 revealed" data-reveal="">

                    <div class="glo-reservation-info">
                      <i class="fad fa-bed"></i>
                      <span>2 Single bed</span>
                    </div>
                    <div class="glo-reservation-info">
                      <i class="fad fa-user"></i>
                      <span>2 Guest</span>
                    </div>
                    <div class="glo-reservation-info">
                      <i class="fas fa-car-garage"></i>
                      <span>Car Parking</span>
                    </div>
                    <div class="glo-reservation-info">
                      <i class="far fa-shower"></i>
                      <span>1 Washroom</span>
                    </div>
                    <div class="glo-reservation-info">
                      <i class="fad fa-house"></i>
                      <span>1500 sq ft</span>
                    </div>
                    <div class="glo-reservation-info">
                      <i class="fas fa-person-booth"></i>
                      <span>Road view</span>
                    </div>
                  </div>
                  <div class="glo-reservation-details-descr mb-45">
                    <h3 class="glo-reservation-details-widgest-title mb-2 revealed" data-reveal="">description</h3>
                    <p data-reveal="" class="revealed">No time to lose, next year is almost here. And a good plan isn’t made overnight. How far are you
                      with your targets, budget, and plan of attack for next year? What REVPAR and GOPPAR do you need to
                      achieve? Is your plan for next year complete, and does it describe all actions in detail? Does
                      everyone on the team know what the objectives are and which steps to take to get there?</p>
                  </div>
                  <div class="glo-reservation-details-facility mb-50">
                    <h3 class="glo-reservation-details-widgest-title mb-3 revealed" data-reveal="">Hotel Facilities</h3>
                    <div class="row align-items-center">
                      {{-- <div class="col-xl-7 col-lg-7">
                        <div data-reveal="left" class="revealed"><img src="assets/img/facilities/details.png" alt="Image not found"></div>
                      </div> --}}
                      <div class="col-md-10">
                        <ul data-reveal="right" class="revealed">
                          <li><i class="far fa-check"></i>Kids Hospitality Option</li>
                          <li><i class="far fa-check"></i>Family Size Room</li>
                          <li><i class="far fa-check"></i>Speedy Wifi Zone</li>
                          <li><i class="far fa-check"></i>Sports Facilities </li>
                          <li><i class="far fa-check"></i>24/7 Support </li>
                          <li><i class="far fa-check"></i>Pools Facilities</li>
                          <li><i class="far fa-check"></i>24/7 Room Service</li>
                          <li><i class="far fa-check"></i>Private Gym Service</li>
                          <li><i class="far fa-check"></i>5 Star Restaurant</li>
                          <li><i class="far fa-check"></i>Private Parking Area</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </x-slot>
    </x-app-modal>
</div>
