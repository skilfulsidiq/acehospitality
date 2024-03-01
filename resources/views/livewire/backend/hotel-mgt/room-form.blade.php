 <x-app-modal id="new_room">
        <x-slot name="title"> Create Room</x-slot>
        <x-slot name="body">
            <div class="form mt-3">
                 <div class="form-group">
                            <x-input-label for="hotel" value="Hotel" />
                            <x-select-input id="hotel" class="block mt-1 w-full" wire:model='form.hotel_id' type="text" name="hotel_name" >
                                <x-slot name="options">
                                    <option>Select</option>
                                    @forelse ($hotels as $hotel )
                                        <option value="{{ $hotel->id }}"> {{ $hotel->hotel_name }} </option>
                                    @empty

                                    @endforelse
                                </x-slot>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('form.hotel_id')" class="mt-2" />
                        </div>
                         <div class="form-group mt-2">
                            <x-input-label for="room" value="Group" />
                            <x-select-input id="room" class="block mt-1 w-full" wire:model='form.room_group_id' >
                                <x-slot name="options">
                                    <option>Select</option>
                                    @forelse ($groups as $k=> $group )

                                        <option value="{{ $group->id??$group['id'] }}"> {{ $group->name??$group['name'] }} </option>
                                    @empty

                                    @endforelse
                                </x-slot>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('form.room_group_id')" class="mt-2" />
                        </div>
                <div class="form-group mt-2">
                     <x-input-label for="address" value="Hotel Number" />
                    <x-text-input id="address" class="block mt-1 w-full" wire:model='form.room_number'   type="text" name="hotel_address" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.room_number')" class="mt-2" />
                </div>

                 <div class="form-group">
                            <x-input-label for="staus" value="Status" />
                            <x-select-input id="status" class="block mt-1 w-full" wire:model="form.status"   name="status"  >
                                <x-slot name="options">
                                    <option>Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                </x-slot>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('form.status')" class="mt-2" />
                        </div>
                <div class="mt-2">
                    <x-primary-button wire:click="submit" type="submit"  class="w-full text-center"> Create </x-primary-button>
                </div>
            </div>
        </x-slot>

    </x-app-modal>
