


                    <div class="glo-location-thumb img-hover overlay">
                        <div class="glo-location-image">
                            <img src="{{ asset($hotel->hotel_cover_image) }}" alt="img not found">
                        </div>

                        <div class="glo-location-content">
                            <h3 class="glo-location-title">{{ $hotel->hotel_name }}</h3>
                            <p class="glo-location-desc mb-30">
                                {{ $hotel->location->location_name }}
                            </p>
                            <div class="glo-location-btn">
                                <a  href="{{ route('hotel-details',$hotel->slug) }}" class="glo-btn-anim"><span>View Details</span></a>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
