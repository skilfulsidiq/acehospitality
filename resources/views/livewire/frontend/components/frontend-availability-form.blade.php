   <section class="pt-0 pb10 bgc-f7 pb50-md" id="avaibility-form">
      <div class="container">
        <div class="row" >
          <div class="col-lg-12" >
            <div class="advance-style4 at-home5 mt-100 mt50-lg mb10 mx-auto animate-up-2" >
              <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"  id="availability-check">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Check Availability</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sold</button>
                </li> --}}
              </ul>
              <div class="tab-content" id="myTabContent" >
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="advance-content-style3 at-home5">
                    <div class="row align-items-center">
                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm">
                         <label class="fz14">Select Location</label>
                        <select class="selectpicker form-control" data-live-search="true" title="Select">
                            <option data-tokens="ketchup mustard">Abuja</option>
                            <option data-tokens="mustard">Lagos</option>
                            <option data-tokens="frosting">Kano</option>
                        </select>

                      </div>
                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm">
                         <label class="fz14">Select Hotel</label>
                        <select class="selectpicker form-control" data-live-search="true" title="Select">
                            <option data-tokens="ketchup mustard">Ace Hotel</option>
                            <option data-tokens="mustard">Ace Hotel</option>
                            <option data-tokens="frosting">Ace Hotel</option>
                        </select>

                      </div>


                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="form-group">
                            <label class="fz14">Arrival Date</label>
                            <input type="date" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="form-group">
                            <label class="fz14">Departure Date</label>
                            <input type="date" class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 col-lg-12 col-xl-12 mt-4">
                        <div class="d-flex align-items-center justify-content-end  mt-2 mt-md-0">
                          {{-- <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button> --}}
                          <button class="ud-btn btn-thm ms-2" type="button"><span class="flaticon-search pe-2"></span> Check</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="advance-content-style3 at-home5">
                    <div class="row align-items-center">
                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm">
                        <label>Search</label>
                        <div class="advance-search-field position-relative text-start">
                          <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                            <div class="box-search">
                              <input class="form-control bgc-f7 bdrs12 ps-0" type="text" name="search" placeholder="Enter Keywords">
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0 px-0">
                          <div class="bootselect-multiselect">
                            <label class="fz14">Loking For</label>
                            <select class="selectpicker">
                              <option>Property Type</option>
                              <option>Apartments</option>
                              <option>Bungalow</option>
                              <option>Houses</option>
                              <option>Loft</option>
                              <option>Office</option>
                              <option>TownHome</option>
                              <option>Villa</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="bootselect-multiselect">
                            <label class="fz14">Location</label>
                            <select class="selectpicker">
                              <option>New York</option>
                              <option>Los Angeles</option>
                              <option>London</option>
                              <option>Paris</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="dropdown-lists">
                            <label class="fz14 mb-1">Price</label>
                            <div class="btn open-btn text-start dropdown-toggle" data-bs-toggle="dropdown">$15,000 <i class="fas fa-caret-down"></i></div>
                            <div class="dropdown-menu">
                              <div class="widget-wrapper pb20 mb0 pl20 pr20">
                                <!-- Range Slider Mobile Version -->
                                <div class="range-slider-style2">
                                  <div class="range-wrapper at-home10">
                                    <div class="slider-range mb30 mt35"></div>
                                    <div class="text-center">
                                      <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                                      <input type="text" class="amount2" placeholder="$70987">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="d-flex align-items-center justify-content-start justify-content-lg-center mt-2 mt-md-0">
                          <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                          <button class="ud-btn btn-thm ms-2" type="button"><span class="flaticon-search pe-2"></span> Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="advance-content-style3 at-home5">
                    <div class="row align-items-center">
                      <div class="col-md-4 col-xl-3 bdrr1 bdrrn-sm">
                        <label>Search</label>
                        <div class="advance-search-field position-relative text-start">
                          <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                            <div class="box-search">
                              <input class="form-control bgc-f7 bdrs12 ps-0" type="text" name="search" placeholder="Enter Keywords">
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0 px-0">
                          <div class="bootselect-multiselect">
                            <label class="fz14">Loking For</label>
                            <select class="selectpicker">
                              <option>Property Type</option>
                              <option>Apartments</option>
                              <option>Bungalow</option>
                              <option>Houses</option>
                              <option>Loft</option>
                              <option>Office</option>
                              <option>TownHome</option>
                              <option>Villa</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="bootselect-multiselect">
                            <label class="fz14">Location</label>
                            <select class="selectpicker">
                              <option>New York</option>
                              <option>Los Angeles</option>
                              <option>London</option>
                              <option>Paris</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-xl-2 bdrr1 bdrrn-sm px20 pl15-sm">
                        <div class="mt-3 mt-md-0">
                          <div class="dropdown-lists">
                            <label class="fz14 mb-1">Price</label>
                            <div class="btn open-btn text-start dropdown-toggle" data-bs-toggle="dropdown">$15,000 <i class="fas fa-caret-down"></i></div>
                            <div class="dropdown-menu">
                              <div class="widget-wrapper pb20 mb0 pl20 pr20">
                                <!-- Range Slider Mobile Version -->
                                <div class="range-slider-style2">
                                  <div class="range-wrapper at-home10">
                                    <div class="slider-range mb30 mt35"></div>
                                    <div class="text-center">
                                      <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                                      <input type="text" class="amount2" placeholder="$70987">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="d-flex align-items-center justify-content-start justify-content-lg-center mt-2 mt-md-0">
                          <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                          <button class="ud-btn btn-thm ms-2" type="button"><span class="flaticon-search pe-2"></span> Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
