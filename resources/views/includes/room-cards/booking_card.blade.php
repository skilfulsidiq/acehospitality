 <div class="card card-selected mb-5 shadow-sm">
      @php
        $amenities = explode(',',$room->amenities);
            $booked_count = countBookedRooms($room->id, $date);
    $available_room_count = $room->no_of_rooms - $room->no_reserved_room - $booked_count;
    $item = getRoomCartItem($room->id);



    @endphp
     <div class="card-body pb-2">
         <!-- Room name -->
         <h3 class="card-title h4">
             <a href="single-room-1.html" target="_blank"
                 class="text-dark link-hover-primary text-uppercase ff-sub ls-1">{{ $room->name }}</a>
         </h3>
         <!-- /Room name -->
         <div class="row g-0">
             <div class="col-12 col-lg-4 col-md-6">
                 <!-- Room image -->
                 <div class="pe-0 pe-md-5 mb-5">
                     <a href="single-room-1.html">
                         <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                             <img src="assets/img/rooms/r22.jpg" srcset="./assets/img/rooms/r22@2x.jpg 2x"
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
                                     @forelse ($amenities as $a)
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
                 <div class="mb-5">
                     <div class="mb-1">
                         <strong class="fw-semibold fs-4"><sup>N</sup>{{ number_format($room->price )}}</strong><small>/night</small>
                     </div>
                     {{-- <div class="d-flex align-items-center">
                         <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                         <span class="badge bg-danger">-16%</span>
                     </div> --}}
                 </div>
                 <!-- /Room price -->
                 <!-- Select/Remove-->

                 <div class="mb-5">
                     <select class="form-select  mb-3 shadow-sm"
                         data-dselect-position="end" wire:model='selectedRoom'>
                          <option value="" >Select Quantity</option>
                          @for ($i = 1; $i < $available_room_count; $i++)

                            {{-- @if(!is_null($item) && $item['quantity']==$i ) --}}
                            {{-- @if(array_key_exists($room->id, $all_qty) && $all_qty[$room->id] == $i ) --}}

                             <option value="{{ $i }}-{{ $room->id }}" @if(array_key_exists($room->id, $all_qty) && $all_qty[$room->id] == $i ) selected @endif>  {{ $i }}</option>
                             {{-- <option  value="{{ $i }}-{{ $room->id }}" @if(!is_null($item) && $item['quantity']==$i ) selected @endif>  {{ $i }}</option> --}}
                             {{-- @else

                             <option value="{{ $i }}-{{ $room->id }}" >  {{ $i }}</option>
                             @endif --}}

                                    {{-- <option value="{{ $i }}-{{ $room->id }}"> {{ $i }} </option> --}}

                                        @endfor


                     </select>
                        @if(!is_null($item))
{{-- btn btn-sm btn-outline-light bg-light --}}
                        <a class=" d-block shadow-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#booking-details-modal"> <span class="text-success">Selected</span>
                         <i class="hicon hicon-80 hicon-line-eye"></i>
                         <span class="text-primary">View Details</span>
                     </a>
                     @endif
                 </div>
                 <!-- /Select/Remove-->
             </div>
         </div>
     </div>
 </div>
