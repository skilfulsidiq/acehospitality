<div class="glo-reservation">
              <div class="glo-reservation-thumb">
                <a href="room-details.html">
                  <div class="img-hover overlay">
                    <img src="assets/img/reservation/3.jpg" alt="Image not found">
                  </div>
                </a>
              </div>
              <div class="glo-reservation-content">
                {{-- <div class="glo-reservation-info-wrapper mb-15">
                  <div class="glo-reservation-info">
                    <i class="fad fa-bed"></i>
                    <span>1 King bed</span>
                  </div>
                  <div class="glo-reservation-info">
                    <i class="fad fa-house"></i>
                    <span>1200 sq ft</span>
                  </div>
                </div> --}}
                <h3 class="glo-reservation-title"><a href="room-details.html">{{ $hotel->hotel_name }}</a></h3>
                {{-- <p class="mb-15">You’ll love falling asleep to the waves crashing beyond your private pool.&nbsp;
                </p> --}}
                <div class="glo-reservation-price d-flex justify-content-between align-items-center">
                  <div class="glo-reservation-btn">
                    <a class="glo-btn-anim" href="{{ route('hotel-details',$hotel->slug) }}"><span>View Details</span></a>
                  </div>
                  {{-- <h4>from $100<span> / night</span></h4> --}}
                </div>
              </div>
            </div>
