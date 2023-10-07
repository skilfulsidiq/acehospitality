<div >

    <div class="col-12 col-xl-12 pe-xl-8" data-cue="fadeIn">
        <!-- Check date -->
        <div class="mb-6">
            <div class="row g-2">

                <div class="col-12 col-md-4">
                    <label for="" class="t">Location</label>
                    <div class="glo-reservation-select special-select  p-relative ">
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






    <section id="checkRooms" class=" glo-cta-area mb-10" id="check-availability">
    <div class="container">
        <h2 class="d-none">Check rooms</h2>
        <div class="row justify-content-center">
            {{-- col-xxl-9 col-xl-10" --}}
            <div class="col-12 ">
                <div class="{{ $class }}  border-0">
                    <form wire:submit.prevent="checkAvailability">
                    <div class="card-body ps-3 pe-3 ps-sm-6 pe-sm-6 pb-3">
                        <div class="row g-2">
                            <div class="col-md-4 form-group">
                                <select class="js-example-basic-single" name="state">
                                    <option value="AL">Alabama</option>
                                        ...
                                    <option value="WY">Wyoming</option>
                                    </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="" class="text-white">Location</label>
                              {{-- <div class="glo-reservation-select2 p-relative "> --}}

                                {{-- <i class="fas fa-location"></i> --}}
                                <select  class="form-control2"  wire:model='location_id'>
                                <option value="" selected="">Select</option>
                                {{-- @foreach ($this->locations as $location )
                                       <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach --}}

                                </select>

                            {{-- </div> --}}
                             @error('location_id') <span class="error">{{ $message }}</span> @enderror


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
                                <select name="glo-booking-select" id="glo-booking-select-2"  wire:model="hotel_id">
                                <option value="" selected="">Select</option>
                                @foreach ($hotels as $hotel )
                                       <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}</option>
                                @endforeach
                                </select>
                            </div>
                            @error('hotel_id') <span class="error">{{ $message }}</span> @enderror
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
                                    <input id="txtCheckDate" type="text" wire:model='date'
                                        class="check-date form-control bg-white text-light bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer"
                                         placeholder="" readonly>
                                    @error('date') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>
                        <div class=" mt-2 d-flex justify-content-end">
                            <div class="">
                                <!-- Button -->
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-10">
                                        <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                        <span>Check Rooms</span>
                                    </button>
                                </div>
                                <!-- /Button -->
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
