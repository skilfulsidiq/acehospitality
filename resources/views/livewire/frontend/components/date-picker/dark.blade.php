<section id="checkRooms" class=" glo-cta-area mb-10" id="check-availability">
    <div class="container">
        <h2 class="d-none">Check rooms</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-9 col-xl-10">
                <div class="{{ $class }}  border-0">
                    <div class="card-body ps-3 pe-3 ps-sm-6 pe-sm-6 pb-3">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <label for="" class="text-white">Location</label>
                              <div class="glo-reservation-select p-relative ">
                                <i class="fas fa-location"></i>
                                <select name="glo-booking-select" id="glo-booking-select-2" style="display: none;">
                                <option value="" selected="">Select</option>
                                <option value="">Abuja</option>
                                <option value="">Lagos</option>
                                </select>
                            </div>



                                {{-- <div class="form-group">
                                    <label class="text-white">Select Location</label>
                                    <select class=" form-control2" title="Select">
                                        <option data-tokens="ketchup mustard">Abuja</option>
                                        <option data-tokens="mustard">Lagos</option>
                                        <option data-tokens="frosting">Kano</option>
                                    </select>
                                </div> --}}

                            </div>
                            <div class="col-md-4 ">
                                  <label for="" class="text-white">Hotel</label>
                                  <div class="glo-reservation-select p-relative ">
                                <i class="fas fa-location"></i>
                                <select name="glo-booking-select" id="glo-booking-select-2" style="display: none;">
                                <option value="" selected="">Select</option>
                                <option value="">Premier Hotel</option>
                                <option value="">Ace Hotel</option>
                                </select>
                            </div>
                                {{-- <label class="text-white">Select Hotel</label>
                                <select class="selectpicker form-control" data-live-search="true" title="Select">
                                    <option data-tokens="ketchup mustard">Ace Hotel</option>
                                    <option data-tokens="mustard">Ace Hotel</option>
                                    <option data-tokens="frosting">Ace Hotel</option>
                                </select> --}}

                            </div>
                            <div class="col-12 col-md-4">
                                  <label for="" class="text-white">Arrival/Departure Date</label>
                                <div class="control-icon mt-5 glo-appointment-input">
                                    <label class="hicon hicon-menu-calendar text-light cursor-pointer"
                                        for="txtCheckDate"></label>
                                    <input id="txtCheckDate" type="text"
                                        class="check-date form-control bg-white text-light bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer"
                                        value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                </div>
                            </div>

                        </div>
                        <div class=" mt-2 d-flex justify-content-end">
                            <div class="">
                                <!-- Button -->
                                <div class="mb-3">
                                    <a href="reservation.html" class="btn btn-primary w-10">
                                        <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                        <span>Check Rooms</span>
                                    </a>
                                </div>
                                <!-- /Button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
