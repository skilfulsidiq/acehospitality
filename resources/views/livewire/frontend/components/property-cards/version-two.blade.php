
 <div>
                        <div class="card card-overlay-slide text-bg-dark border-0">
                            <span class="position-absolute top-0 end-0 z-1 pt-4 pe-4">
                                {{-- <strong><sup>$</sup>95.00</strong> <span class="small">/ Night</span> --}}
                            </span>
                            <img src="{{ $image }}" srcset="{{ $image }} 2x" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <h3 class="card-title mb-4 h4 ff-sub text-uppercase fw-medium">{{ $title }}</h3>
                                <p class="card-text small text-white text-opacity-75 mb-6">{{ $location }}</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="single-room-1.html" class="card-link fw-medium small p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="{{ route('hotel-details') }}" class="btn btn-primary">
                                        <i class="hicon hicon-menu-eye"></i>
                                        <span>View Details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
