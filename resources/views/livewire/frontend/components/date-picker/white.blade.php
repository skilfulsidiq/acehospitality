<div>

    <div class="col-12 col-xl-12 pe-xl-8" data-cue="fadeIn">
        <!-- Check date -->
        <div class="mb-6">
            <div class="row g-2">

                <div class="col-12 col-md-4">
                    <label for="" class="t">Location</label>
                    <div class="glo-reservation-select p-relative ">
                        {{-- <i class="fas fa-location"></i> --}}
                        <select name="glo-booking-select" id="glo-booking-select-2" style="display: none;">
                            <option value="" selected="">Select</option>
                            <option value="">Abuja</option>
                            <option value="">Lagos</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <label for="" class="">Hotel</label>
                    <div class="glo-reservation-select p-relative ">
                        {{-- <i class="fas fa-location"></i> --}}
                        <select name="glo-booking-select" id="glo-booking-select-2" style="display: none;">
                            <option value="" selected="" class="">Select</option>
                            <option value="">Premier Hotel</option>
                            <option value="">Ace Hotel</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <label for="" class="mt-3"></label>
                    <!-- Input date -->
                    <div class="">
                        <div class="control-icon ">
                            <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate"></label>
                            <input id="hotel-picker" type="text"
                            {{-- <input id="txtCheckDate" type="text" --}}
                                class="check-date form-control shadow-sm cursor-pointer"
                                value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                        </div>
                    </div>
                    <!-- /Input date -->
                </div>



                <!-- /Check date -->

            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                 <div class="col-md-4 ">
                    <div class="mb-3 ">
                        <a href="reservation.html" class="btn btn-primary w-10">
                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                            <span>Check Availability</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
