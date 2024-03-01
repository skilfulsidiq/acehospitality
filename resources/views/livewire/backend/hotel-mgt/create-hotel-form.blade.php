
{{-- <h1>Hello</h1> --}}
 <x-app-modal id="new_hotel">
        <x-slot name="title"> Create Hotel</x-slot>
        <x-slot name="body">
            <div class="form mt-3">
                     <div class="form-group">
                     <x-input-label for="name" value="Hotel Name" />
                    <x-text-input id="name" class="block mt-1 w-full"  type="text" wire:model='form.hotel_name' name="hotel_name" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.hotel_name')" class="mt-2" />
                </div>
                <div class="form-group mt-2">
                     <x-input-label for="address" value="Hotel Address" />
                    <x-text-input id="address" class="block mt-1 w-full" wire:model='form.hotel_address'   type="text" name="hotel_address" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.hotel_address')" class="mt-2" />
                </div>
                 <div class="form-group mt-2">
                     <x-input-label for="email" value="Hotel Email" />
                    <x-text-input id="email" class="block mt-1 w-full" wire:model='form.hotel_email'  type="email" name="hotel_email" required  />

                        <x-input-error :messages="$errors->get('form.hotel_email')" class="mt-2" />
                </div>
                 <div class="form-group mt-2">
                     <x-input-label for="phone" value="Hotel Phone" />
                    <x-text-input id="phone" class="block mt-1 w-full" wire:model='form.hotel_phone'  type="number" name="hotel_phone" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.hotel_phone')" class="mt-2" />
                </div>
                <div class="mt-2">
                    <x-primary-button wire:click="create"  class="w-full text-center"> Create </x-primary-button>
                </div>
            </div>
        </x-slot>

    </x-app-modal>
