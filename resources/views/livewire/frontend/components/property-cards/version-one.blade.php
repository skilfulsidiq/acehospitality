 <div class="card  @if(!is_null($item))  card-selected @else @endif mb-5 shadow-sm">
      @php
        // $amenities = explode(',',$room->amenities);
    //         $booked_count = countBookedRooms($room->id, $date);
    // $available_room_count = $room->no_of_rooms - $room->no_reserved_room - $booked_count;




    @endphp
     <div class="card-body pb-2">
         <!-- Room name -->
         <h3 class="card-title h4">
             <a href="#" target="_blank"
                 class="text-dark link-hover-primary text-uppercase ff-sub ls-1">{{ $room->name }}
                    <br>
                    <span style="font-size: 0.8rem;
    color: #6c6c6c;">{{$room->hotel?->hotel_name}}</span>
                </a>
         </h3>
         <!-- /Room name -->
         <div class="row g-0">
             <div class="col-12 col-lg-4 col-md-6">
                 <!-- Room image -->
                 <div class="pe-0 pe-md-5 mb-5">
                     <a href="#">
                         <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                             <img src="{{ asset($room->images) }}" srcset="{{ asset($room->images) }} 2x"
                                 class="img-fluid w-100" alt="">
                             <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                         </figure>
                     </a>
                 </div>
                 <!-- /Room image -->
             </div>
             <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                 <!-- Room info -->
                 <div class="small">
                     <div class="mb-4">
                         <h4 class="mb-1 h6 fw-semibold">Featured Amenities</h4>
                         <div class="glo-price-features mb-40">


                                <ul>
                                     @forelse ($this->amenities as $a)
                                    <li>{{ $a }}</li>

                                     @empty

                            @endforelse
                                </ul>
                                </div>
                         <div class="row">
                            <div class="col-md-10">
                                {{ limitStr($room->desc, 100) }} <button data-bs-toggle="modal" data-bs-target="#{{ $room->id }}"  class="text-primary">read more</button>

                                @includeIf('includes.room-cards.room_details',['room'=>$room])


                            </div>

                            {{-- @forelse ($amenities as $a)
                             <div class="col-6 col-md-4"> {{ $a }}
                             </div> --}}


                             {{-- <div class="col-12 col-md-6"> Area: 30 m²/323 ft²
                             </div>
                             <div class="col-12 col-md-6"> 2 Adults - 1 Children
                             </div>
                             <div class="col-12 col-md-6"> No Smoking </div> --}}
                         </div>
                     </div>
                     <div class="mb-4">
                         {{-- <h4 class="mb-1 h6 fw-semibold">Price includes</h4>
                         <div class="row">
                             <div class="col-12 col-md-6">
                                 <span class="text-success fw-medium">Free
                                     Cancellation</span>
                             </div>
                             <div class="col-12 col-md-6">
                                 <span class="text-success fw-medium">Breakfast
                                     Included</span>
                             </div>
                         </div>
                         <div class="form-check mt-3">
                             <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkExtraBed2">
                             <label class="form-check-label" for="chkExtraBed2">Extra bed
                                 (<sup>$</sup>15.00)</label>
                         </div> --}}
                     </div>
                 </div>
                 <!-- /Room info -->
             </div>
             <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                 <!-- Room price -->

                 <!-- /Room price -->
                 <!-- Select/Remove-->

                 <div class="mb-5">


                     @if(!is_null($item))


                        <div class="mb-3">
                            <h3 class="h6 mb-3 d-flex align-items-center justify-content-between ">
                                <span class="text-success">Selected</span>
                                  <a href="#" wire:click="removeItem({{ $room->id }})" class="text-danger fs-6 ms-2"><i class=" hicon hicon-line-close hicon-100 hicon-bold"></i></a>
                                {{-- <a href="#" class="text-danger fs-6 ms-2"><i class="hicon hicon-line-close hicon-60 hicon-bold"></i></a> --}}
                            </h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Room Price </span>
                                <strong class="fw-semibold fs-6">N {{ number_format($item['price'] )}}</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Quantity </span>
                                <strong class="fw-semibold fs-6">{{ $item['quantity'] }}</strong>
                            </div>
                        </div>
                        <hr>
                        {{-- btn-outline-light  --}}

                       <a class="btn btn-sm btn-outline-light bg-light d-block shadow-sm" href="javascript:;" wire:click="removeItem({{ $room->id }})"   >
                                                    <i class="hicon hicon-80 hicon-line-close"></i>
                                                    <span>Remove </span>
                                                     {{-- <i class="hicon hicon-80 hicon-flights-one-ways"></i> --}}
                                                </a>

                      {{-- <a class=" d-block shadow-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#booking-details-modal">
                         <i class="hicon hicon-80 hicon-line-eye"></i>
                         <span class="text-primary">View Details</span>
                     </a> --}}


                     @else
                     <div class="mb-5">
                     <div class="mb-1">
                         <strong class="fw-semibold fs-4"><sup>N</sup>{{ number_format($room->price )}}</strong><small>/night</small>
                     </div>
                     {{-- <div class="d-flex align-items-center">
                         <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                         <span class="badge bg-danger">-16%</span>
                     </div> --}}
                 </div>
                 @if(isset(request()->date))
                     <select class="form-select  mb-3 shadow-sm"
                         data-dselect-position="end" wire:model.live='selectedRoom'>



                          <option value="" >Select Quantity</option>
                          @for ($i = 1; $i <= $available_room_count; $i++)

                             <option  value="{{ $i }}-{{ $room->id }}" >  {{ $i }}</option>

                                        @endfor


                     </select>
                     @else
                        <div class="text-center">
                            <a href="#check-availaility" class="text-warning">
                                Select date to proceed
                            </a>
                        </div>
                     @endif
                     @endif
                 </div>
                 <!-- /Select/Remove-->
             </div>
         </div>
     </div>
 </div>
