 <x-app-modal id="new_hotel">
        <x-slot name="title"> Select Date</x-slot>
        <x-slot name="body">
                <div class="mb-3">
                                        {{-- <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Range</h5> --}}
                                      
                <div class="mt-2">
                    <x-primary-button wire:click="create"  class="w-full text-center"> Check Availability </x-primary-button>
                </div>
            </div>
        </x-slot>

    </x-app-modal>



