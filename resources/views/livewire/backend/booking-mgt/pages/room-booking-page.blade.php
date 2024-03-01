<div>
    <x-breadcrum title="Room Bookings" home="Booking Mgt" nav="List"></x-breadcrum>



        <x-app-table>
        <x-slot name="top_left_button">

        </x-slot>
        <x-slot name="form">Room Bookings</x-slot>
        <x-slot name="actions">
             <x-link-button href="{{ route('create-room-booking') }}" class="ml-3" >
               <i class="bx bx-plus me-1"></i> New Booking
            </x-link-button>
        </x-slot>
        <x-slot name="search">
            <label class="dark:text-gray-100">Search:
                                                <input type="search" wire:model="search" class="py-0.5 px-1 w-40 rounded border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                                            </label>
        </x-slot>
        <x-slot name="thead">
            <th scope="col" class="px-6 py-3.5">s/n</th>
            <th  scope="col" class="px-6 py-3.5">Booking Ref</th>
            <th  scope="col" class="px-6 py-3.5">Guest Name</th>
            <th scope="col" class="px-6 py-3.5">Room Name</th>
            <th scope="col" class="px-6 py-3.5">Price</th>
            <th scope="col" class="px-6 py-3.5">Quantity</th>
            <th scope="col" class="px-6 py-3.5">Total</th>
            <th scope="col" class="px-6 py-3.5">Arrival Date</th>
            <th scope="col" class="px-6 py-3.5">Departure Date</th>
            <th scope="col" class="px-6 py-3.5">Check In Status</th>
            <th scope="col" class="px-6 py-3.5">Payment Status</th>
            <th scope="col" class="px-6 py-3.5"></th>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($bookings as $booking)
              <tr class="bg-white border-b border-gray-100  hover:bg-gray-50/50/50 dark:bg-zinc-700 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
               {{-- <tr class="{{ $key%2==0?'bg-gray-50/60 dark:bg-zinc-600/50':'' }}"> --}}
                    <td scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">@includeIf('includes.pagination_number',['app'=>$bookings])</td>
                    <td>{{ $booking->booking_ref }}</td>
                    <td>{{ $booking->firstname }} {{ $booking->lastname }}
                         <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0"> {{ $booking->email }} </p>
                    </td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->price }}</td>
                    <td>{{ $booking->quantity }}</td>
                     <td>{{ makeCurrency($booking->grand_total) }}</td>
                    <td>{{ $booking->arrival_date }}</td>
                    <td>{{ $booking->departure_date }}</td>

            </tr>
            @empty

            @endforelse
        </x-slot>
        <x-slot name="pagination">
             @include('includes.pagination_footer',['app'=>$bookings])
        </x-slot>
 {{-- {{ $all->links('livewire.features.components.custom-pagination-links-view') }} --}}
    </x-app-table>
</div>


