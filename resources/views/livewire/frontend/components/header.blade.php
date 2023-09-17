<div>
     <header class="header-nav nav-homepage-style  stricky main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
      <div class="container posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos mr40">
                <x-logo.main-logo type="header-logo" />
              </div>
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list2"> <a class="list-item2" href="{{ route('home')}}"><span class="title">Home</span></a>
                  <!-- Level Two-->

                </li>
                <li class="megamenu_style2"> <a   href="{{ route('hotel-list') }}"><span class="title">Hotels</span></a>
                  {{-- <ul class="row dropdown-megamenu">
                    <li class="col mega_menu_list">
                      <h4 class="title">Grid View</h4>
                      <ul>
                        <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                        <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                        <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                        <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                        <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                        <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                        <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                        <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                        <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
                      </ul>
                    </li>
                    <li class="col mega_menu_list">
                      <h4 class="title">Map Style</h4>
                      <ul>
                        <li><a href="page-property-header-map-style.html">Header Map Style</a></li>
                        <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                        <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                        <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                        <li><a href="page-property-half-map-v4.html">Map V4</a></li>
                      </ul>
                    </li>
                    <li class="col mega_menu_list">
                      <h4 class="title">List View</h4>
                      <ul>
                        <li><a href="page-property-list.html">List v1</a></li>
                        <li><a href="page-property-list-all.html">List All Style</a></li>
                      </ul>
                    </li>
                  </ul> --}}
                </li>
                <li class="visible_list2"> <a class="list-item2" href="{{ route('about') }}"><span class="title">About Us</span></a>

                </li>
                <li class="visible_list2"> <a class="list-item2" href="{{ route('reservation-page') }}"><span class="title">Rooms</span></a>

                </li>
                <li class="visible_list2"> <a class="list-item2" href="{{ route('contact') }}"><span class="title">Contact Us</span></a>

                </li>

              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
              {{-- <a class="login-info d-flex align-items-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="far fa-user-circle fz16 me-2"></i> <span class="d-none d-xl-block">Login / Register</span></a> --}}
              <a class="ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4" href="{{ route('home') }}#availability-check">Check Availability<i class="fal fa-arrow-right-long"></i></a>
              {{-- <a class="sidemenu-btn filter-btn-right" href="#"><img class="img-1" src="images/icon/nav-icon-white.svg" alt=""><img class="img-2" src="images/icon/nav-icon-dark.svg" alt=""></a> --}}
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>


  <!--End Menu In Hiddn SideBar -->
  <!-- Advance Feature Modal Start -->
 <div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper">
                  <h6 class="list-title">Price Range</h6>
                  <!-- Range Slider Mobile Version -->
                  <div class="range-slider-style modal-version">
                    <div class="range-wrapper">
                      <div class="mb30 mt35" id="slider"></div>
                      <div class="d-flex align-items-center">
                        <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                        <span id="slider-range-value2"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Type</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>Property</option>
                      <option data-tokens="Apartments">Apartments</option>
                      <option data-tokens="Bungalow">Bungalow</option>
                      <option data-tokens="Houses">Houses</option>
                      <option data-tokens="Loft">Loft</option>
                      <option data-tokens="Office">Office</option>
                      <option data-tokens="Townhome">Townhome</option>
                      <option data-tokens="Villa">Villa</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Property ID</h6>
                  <div class="form-style2">
                    <input type="text" class="form-control" placeholder="RT04949213">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bedrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="xany" name="xbeds" type="radio" checked>
                      <label for="xany">any</label>
                    </div>
                    <div class="selection">
                      <input id="xoneplus" name="xbeds" type="radio">
                      <label for="xoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="xtwoplus" name="xbeds" type="radio">
                      <label for="xtwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="xthreeplus" name="xbeds" type="radio">
                      <label for="xthreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="xfourplus" name="xbeds" type="radio">
                      <label for="xfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="xfiveplus" name="xbeds" type="radio">
                      <label for="xfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bathrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="yany" name="ybath" type="radio" checked>
                      <label for="yany">any</label>
                    </div>
                    <div class="selection">
                      <input id="yoneplus" name="ybath" type="radio">
                      <label for="yoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="ytwoplus" name="ybath" type="radio">
                      <label for="ytwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="ythreeplus" name="ybath" type="radio">
                      <label for="ythreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="yfourplus" name="ybath" type="radio">
                      <label for="yfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="yfiveplus" name="ybath" type="radio">
                      <label for="yfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Location</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>All Cities</option>
                      <option data-tokens="California">California</option>
                      <option data-tokens="Chicago">Chicago</option>
                      <option data-tokens="LosAngeles">Los Angeles</option>
                      <option data-tokens="Manhattan">Manhattan</option>
                      <option data-tokens="NewJersey">New Jersey</option>
                      <option data-tokens="NewYork">New York</option>
                      <option data-tokens="SanDiego">San Diego</option>
                      <option data-tokens="SanFrancisco">San Francisco</option>
                      <option data-tokens="Texas">Texas</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Square Feet</h6>
                  <div class="space-area">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Min.">
                      </div>
                      <span class="dark-color">-</span>
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Max">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper mb0">
                  <h6 class="list-title mb10">Amenities</h6>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Attic
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Basketball court
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Air Conditioning
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Lawn
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">TV Cable
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Dryer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Outdoor Shower
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Washer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Lake view
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Wine cellar
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Front yard
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Refrigerator
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
            <div class="btn-area">
              <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
