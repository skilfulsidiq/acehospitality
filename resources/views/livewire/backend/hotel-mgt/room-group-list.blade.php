<div>
    <x-breadcrum title="Room Groups" home="Hotel" nav="List"></x-breadcrum>
      <x-app-table>
        <x-slot name="top_left_button">

        </x-slot>
        <x-slot name="form"> </x-slot>
        <x-slot name="actions">
             <x-nav-link href="{{ route('room-group-form') }}" class="ml-3" >
               <i class="bx bx-plus me-1"></i>  Create Room Group
            </x-nav-link>
        </x-slot>
        <x-slot name="search">
            <label class="dark:text-gray-100">Search:
                                                <input type="search" wire:model="search" class="py-0.5 px-1 w-40 rounded border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                                            </label>
        </x-slot>
        <x-slot name="thead">
            <th scope="col" class="px-6 py-3.5">s/n</th>
            <th  scope="col" class="px-6 py-3.5">Hotel Name</th>
            <th  scope="col" class="px-6 py-3.5">Name</th>
            <th scope="col" class="px-6 py-3.5">Price</th>
            <th scope="col" class="px-6 py-3.5">Bed</th>
            <th scope="col" class="px-6 py-3.5">Bath</th>
            <th scope="col" class="px-6 py-3.5">Guest</th>
            <th scope="col" class="px-6 py-3.5">No of Room</th>
            <th scope="col" class="px-6 py-3.5">No of Reserved</th>
            <th scope="col" class="px-6 py-3.5">Status</th>
            <th scope="col" class="px-6 py-3.5">Action</th>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($rooms as $key => $room )
               <tr class="bg-white border-b border-gray-100  hover:bg-gray-50/50/50 dark:bg-zinc-700 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                    <td scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">@includeIf('includes.pagination_number',['app'=>$rooms])</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->hotel->hotel_name }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->name }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ makeCurrency($room->price)}}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->bed }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->bath }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->guest }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->no_of_rooms }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $room->no_reserved_room }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">
                        <div class="text-xs {{ $room->status==1?'bg-green-50 text-green-500 dark:bg-green-500/30':'bg-yellow-50 text-yellow-500 dark:bg-yellow-500/30' }} inline-block px-1 py-0.5 rounded font-medium ">
                        {{ $room->status==1?'Active':"Inactive" }}</div>
                    </td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">
                        <a href="{{ route('room-group-form',$room->slug) }}" class="btn-sm"><span><i data-feather="edit"></i></span></a>
                    </td>
                </tr>
            @empty

            @endforelse
        </x-slot>
        <x-slot name="pagination">
             @include('includes.pagination_footer',['app'=>$rooms])
        </x-slot>
 {{-- {{ $all->links('livewire.features.components.custom-pagination-links-view') }} --}}
    </x-app-table>
</div>
