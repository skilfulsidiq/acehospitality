<div>
      <x-breadcrum title="Hotels" home="Dashboard" nav="List"></x-breadcrum>
    {{-- The whole world belongs to you. --}}
    {{-- <x-top-page>
        <x-slot name="right">
             <x-primary-button type="button" class="ml-3" wire:click="$emit('openModal','features.hotel-mgt.create-hotel-form')">
                Create Hotel
            </x-primary-button>

        </x-slot>
    </x-top-page> --}}
    <x-app-table>
        <x-slot name="top_left_button">

        </x-slot>
        <x-slot name="form">Hotels</x-slot>
        <x-slot name="actions">
             <x-primary-button type="button" class="ml-3" wire:click="$emit('openModal','features.hotel-mgt.create-hotel-form')">
               <i class="bx bx-plus me-1"></i>  Create Hotel
            </x-primary-button>
        </x-slot>
        <x-slot name="search">
            <label class="dark:text-gray-100">Search:
                                                <input type="search" wire:model="search" class="py-0.5 px-1 w-40 rounded border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                                            </label>
        </x-slot>
        <x-slot name="thead">
            <th scope="col" class="px-6 py-3.5">s/n</th>
            <th  scope="col" class="px-6 py-3.5">Hotel Name</th>
            <th  scope="col" class="px-6 py-3.5">Hotel Email</th>
            <th scope="col" class="px-6 py-3.5">Hotel Phone</th>
            <th scope="col" class="px-6 py-3.5">Hotel Address</th>
            <th scope="col" class="px-6 py-3.5"></th>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($hotels as $key => $hotel )
               <tr class="bg-white border-b border-gray-100  hover:bg-gray-50/50/50 dark:bg-zinc-700 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
               {{-- <tr class="{{ $key%2==0?'bg-gray-50/60 dark:bg-zinc-600/50':'' }}"> --}}
                    <td scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">@includeIf('includes.pagination_number',['app'=>$hotels])</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $hotel->hotel_name }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $hotel->hotel_email }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $hotel->hotel_phone }}</td>
                    <td class="px-6 py-3.5 dark:text-zinc-100">{{ $hotel->hotel_address }}</td>
                    {{-- <td class="px-6 py-3.5 dark:text-zinc-100"></td> --}}
                     <td class="px-6 py-3.5 dark:text-zinc-100">
                        <button wire:click="$emit('openModal','features.hotel-mgt.create-hotel-form',{{ json_encode(['slug'=>$hotel->id]) }})"  class="btn-sm"><span><i data-feather="edit"></i></span></button>
                    </td>
                </tr>
            @empty

            @endforelse
        </x-slot>
        <x-slot name="pagination">
             @include('includes.pagination_footer',['app'=>$hotels])
        </x-slot>
 {{-- {{ $all->links('livewire.features.components.custom-pagination-links-view') }} --}}
    </x-app-table>
    {{-- <x-app-modal id="new_hotel">
        <x-slot name="title"> Create Hotel</x-slot>
        <x-slot name="body">
            <div class="form mt-3">
                @livewire('features.hotel-mgt.create-hotel-form')
            </div>
        </x-slot>

    </x-app-modal> --}}

</div>
