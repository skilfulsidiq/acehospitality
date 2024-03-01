<div>
    @php
        $app_vat = 0;
        $total = 0;
        $app_tax = 0;
    @endphp
    <x-breadcrum title="Create Room Bookings" home="Booking Mgt" nav="List"></x-breadcrum>

    <div class="flex flex-row text-center justify-center gap-3">
        <div class="basis-1/2 lg:basis-1/3">
            <form wire:submit.prevent="checkAvailability">
                <div class="form-group">
                    {{-- <label for="">Select Date</label> --}}
                    <input type="text" wire:model.lazy="date" @if(!\Cart::isEmpty()) disabled @else @endif
                        class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                        id="availability-date">
                </div>
        </div>
        <div class="basis-1/2 lg:basis-1/4">
              @if(!\Cart::isEmpty())
                     <x-secondary-button type="button" wire:click="clearCart()"
                                            class="btn-sm text-red-500"><span><i data-feather="clear"></i></span> Reset</x-secondary-button>
              @else
            <x-primary-button type="submit" class="w-full text-center"> Check Availability </x-primary-button>
            @endif
        </div>
        </form>
    </div>

    @if ($checkingLoading)
        <div class="flex justify-content-center">
            loading...
        </div>
    @else

    <div class="grid grid-cols-12 mt-5">
        <div class="col-span-12 lg:col-span-6 md:col-span-6">
            <x-app-table>
                <x-slot name="top_left_button">

                </x-slot>
                <x-slot name="form"></x-slot>
                <x-slot name="actions">
                </x-slot>
                <x-slot name="search">
                </x-slot>
                <x-slot name="thead">
                    <th scope="col" class="px-6 py-3.5">s/n</th>
                    <th scope="col" class="px-6 py-3.5">Room </th>
                    <th scope="col" class="px-6 py-3.5">Price</th>
                    <th scope="col" class="px-6 py-3.5">Available Room</th>
                    <th scope="col" class="px-6 py-3.5"></th>
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($available_rooms as $key => $room )

                        @php

                            $booked_count = countBookedRooms($room->id, $start_date, $end_date);
                            $available_room_count = $room->no_of_rooms - $room->no_reserved_room - $booked_count;

                        @endphp
                        <tr
                            class="bg-white border-b border-gray-100  hover:bg-gray-50/50/50 dark:bg-zinc-700 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                            {{-- <tr class="{{ $key%2==0?'bg-gray-50/60 dark:bg-zinc-600/50':'' }}"> --}}
                            <td scope="row"
                                class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                {{ $loop->iteration }}</td>
                            <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->name }}</td>
                            <td class="px-6 py-3.5 dark:text-zinc-100">{{ makeCurrency($room->price) }}</td>
                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                {{-- <x-secondary-button type="button" wire:click="addRoom({{json_encode($room)}})"> Add Room </x-secondary-button> --}}
                                <x-select-input id="hotel" class="block mt-1 w-full" wire:model='selectedRoom'
                                    type="text" name="hotel_name">
                                    <x-slot name="options">
                                        <option value="">select</option>
                                        @for ($i = 1; $i < $available_room_count; $i++)

                                            {{-- @if (array_key_exists($room->id, $all_qty) && $all_qty[$room->id] == $i) --}}
                                            <option value="{{ $i }}-{{ $room->id }}"
                                                {{ array_key_exists($room->id, $all_qty) && $all_qty[$room->id] == $i ? 'selected' : '' }}>
                                                {{ $i }}</option>
                                            {{-- @else

                                    <option value="{{ $i }}-{{ $room->id }}"> {{ $i }} </option>
                                   @endif --}}
                                        @endfor
                                    </x-slot>
                                </x-select-input>



                            </td>
                            <td class="px-6 py-3.5 dark:text-zinc-100"></td>

                        </tr>
                    @empty

                    @endforelse
                </x-slot>
                <x-slot name="pagination">

                </x-slot>
                {{-- {{ $all->links('livewire.features.components.custom-pagination-links-view') }} --}}
            </x-app-table>
        </div>
        <div class="col-span-12 lg:col-span-6 md:col-span-6">
            <div class="card">
                <div class="card-body">

                    <table class="w-full">
                        <thead class="border-b border-gray-50 dark:border-zinc-600 ">
                            <tr>
                                <th class="p-3 w-200 text-start text-gray-700 dark:text-gray-100">Room</th>
                                <th class="text-start  p-3 text-gray-700 dark:text-gray-100">Qty</th>
                                <th class="text-start  p-3 text-gray-700 dark:text-gray-100">Price</th>
                                <th class="text-start  p-3 text-gray-700 dark:text-gray-100">Night</th>
                                <th class="text-start p-3 w-32 text-gray-700 dark:text-gray-100">Line Total</th>
                                <th class="text-end  p-3 w-32 text-gray-700 dark:text-gray-100"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carts as $c)
                                <tr class="border-b border-gray-50 dark:border-zinc-600 ">
                                    <td scope="col" class="text-start p-3 text-gray-700 dark:text-gray-100">
                                        {{ $c['name'] }}</td>
                                    <td class="p-3">
                                        {{-- <h5 class="text-15 mb-1 text-gray-700 dark:text-gray-100">  --}}

                                        {{ $c['quantity'] }}
                                        @php
                                            $sub = $c['quantity'] * $c['price'];
                                            $app_vat = round(($sub * $vat)/100);
                                            $app_tax = round(($sub * $tax)/100);
                                            $total = $sub + $vat + $tax;
                                        @endphp
                                        {{-- </h5> --}}
                                        {{-- <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0"> </p> --}}
                                    </td>
                                    <td class="p-3">{{ makeCurrency($c['price']) }}</td>
                                    <td class="p-3">{{ $c['attributes']['night']}}</td>
                                    <td class="text-start w-200  p-3 text-gray-500 dark:text-zinc-100">
                                        {{ makeCurrency($sub) }}</td>
                                    <td>
                                        <button type="button" wire:click="removeItem({{ $c['id'] }})"
                                            class="btn-sm text-red-500"><span><i data-feather="trash-2"></i></span> Remove</button>
                                    </td>
                                    <td scope="col"></td>
                                </tr>

                            @empty
                            @endforelse



                        </tbody>
                    </table>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-8 md:col-span-8">
                            @if(!\Cart::isEmpty())
                           <form wire:submit.prevent="createBooking">
                             <div class="form-group mt-2">
                                <x-input-label for="address" value="First Name" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text"
                                    name="hotel_address" wire:model="firstname" />
                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                            </div>
                            <div class="form-group mt-2">
                                <x-input-label for="address" value="Last Name" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text"
                                    name="lastname" wire:model="lastname" />
                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                            </div>
                            <div class="form-group mt-2">
                                <x-input-label for="address" value="Email" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text"
                                    name="email" wire:model="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group mt-2">
                                <x-input-label for="address" value="Phone" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text"
                                    name="phone" wire:model="phone" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                              <div class="mt-4">
                                <x-primary-button type="submit" class="w-full text-center"> Create Booking </x-primary-button>
                              </div>
                           </form>
                           @else
                           @endif
                        </div>
                        <div class="col-span-12 lg:col-span-4 md:col-span-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <th scope="row" colspan="2"
                                            class="text-end p-3 text-gray-700 dark:text-gray-100">Sub Total</th>
                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">
                                            {{ makeCurrency(\Cart::getTotal()) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2"
                                            class="text-end p-3 text-gray-700 dark:text-gray-100">Tax ({{ $tax }}%)</th>
                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">{{ makeCurrency($app_tax) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2"
                                        class="text-end p-3 text-gray-700 dark:text-gray-100">VAT ({{ $vat }}%)</th>
                                    <td class="text-end p-3 text-gray-500 dark:text-zinc-100">{{ makeCurrency($app_vat) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2"
                                        class="text-end p-3 text-gray-700 dark:text-gray-100">Total</th>
                                    <td class="p-3 text-gray-700 dark:text-gray-100 text-end">
                                        <h4 class="m-0">{{ makeCurrency($total) }}</h4>
                                    </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>
      @endif






</div>



@push('custom_script')
    <script>
        flatpickr('#availability-date', {
            mode: "range",
            minDate: "today",
            dateFormat: "d-m-Y",
            // onChange(selectedDates, value, datepicker) {
            //     if (selectedDates.length === 1) {
            //         datepicker.set('minDate', addDays(selectedDates[0], 1)) // addDays() is from date-fns
            //     } else {
            //         datepicker.set('minDate', 'today') // reset back to default
            //     }
            // },
            defaultDate: [new Date(), new Date()]
        });
    </script>
@endpush
