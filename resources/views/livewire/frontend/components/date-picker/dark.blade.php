<section id="checkRooms" class=" glo-cta-area mb-10" id="check-availability">
    <div class="container">
        <h2 class="d-none">Check rooms</h2>
        <div class="row justify-content-center">
            {{-- col-xxl-9 col-xl-10" --}}
            <div class="col-12 ">
                <div class="{{ $class }}  border-0">
                    <form wire:submit="checkAvailability">
                        <div class="card-body ps-3 pe-3 ps-sm-6 pe-sm-6 pb-3">
                            <div class="row g-2">

                                <div class="col-md-4 form-group">
                                    <label for="" class="text-white">Location</label>
                                    <div class="glo-reservation-select booking-form p-relative ">
                                        {{-- <i class="fas fa-location"></i> wire:change="locatedSelected"  --}}
                                        <select class="form-control" wire:model.live='location_id'>
                                            <option value="" selected="">Select</option>
                                            @foreach ($this->locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}
                                                </option>
                                            @endforeach

                                        </select>

                                        @error('location_id')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-4 ">
                                    <label for="" class="text-white">Hotel</label>
                                    <div class="glo-reservation-select booking-form p-relative ">
                                        <select class="form-control" wire:model.live="hotel_id">
                                            <option value="" selected="">Select</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('hotel_id')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12 col-md-4" >
                                    <label for="" class="text-white">Arrival/Departure Date</label>
                                    {{-- @if(isset($date) && $date != "")
                                        <button wire:click class="btn btn-white text-white"> {{ $date }} </button>
                                    @else --}}
                                    <div class="control-icon mt-5 glo-appointment-input" wire:ignore>
                                        <label class="hicon hicon-menu-calendar text-light cursor-pointer"
                                        for="txtCheckDate"></label>
                                        <input id="hotel-picker" type="text" wire:model.live="date"
                                            class="check-date form-control bg-white text-light bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer"
                                            placeholder="" readonly>
                                        @error('date')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- @endif --}}
                                </div>

                            </div>
                            <div class=" mt-2 d-flex justify-content-end">
                                <div class="">
                                    <!-- Button -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-10">
                                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                            <span>Check Rooms</span>
                                            <span wire:loading> checking... </span>
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
@push('script')
<script>
       var input = document.querySelector("#hotel-picker");
     
                var demo2 = new HotelDatepicker(input,{
                         inline: false,
                        topbarPosition: "top",
                        // enableCheckout: true,
                        onSelectRange: function() {
                                console.log("data selected");
                                // console.log(this.getValue())

                                @this.set('date', this.getValue());
                            },



                    });
</script>
@endpush
