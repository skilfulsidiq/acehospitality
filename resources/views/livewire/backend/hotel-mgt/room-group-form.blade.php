<div>
    <x-breadcrum title="Room Groups" home="Hotel" nav="Form"></x-breadcrum>

    <div class="grid grid-cols-1">
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body pb-0">
                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Form</h6>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
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
                    </div>
                     <div class="col-span-12 lg:col-span-6">
                        <div class="form-group">
                            <x-input-label for="name" value=" Name" />
                            <x-text-input id="name" class="block mt-1 w-full" wire:model="form.name" type="text" name="name" />
                            <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-3">
                        <div class="form-group">
                            <x-input-label for="price" value=" Price" />
                            <x-text-input id="price" class="block mt-1 w-full" wire:model="form.price" type="number" min="1" name="price" />
                            <x-input-error :messages="$errors->get('form.price')" class="mt-2" />
                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="form-group">
                            <x-input-label for="bed" value=" Bed" />
                            <x-text-input id="bed" class="block mt-1 w-full" type="number" wire:model="form.bed" min="1" name="bed" />
                            <x-input-error :messages="$errors->get('form.bed')" class="mt-2" />
                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="form-group">
                            <x-input-label for="bath" value=" Bath" />
                            <x-text-input id="bath" class="block mt-1 w-full" type="number" wire:model="form.bath" name="bath"  />
                            <x-input-error :messages="$errors->get('form.bath')" class="mt-2" />
                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="form-group">
                            <x-input-label for="guest" value="Guest" />
                            <x-text-input id="guest" class="block mt-1 w-full" type="number" wire:model="form.guest" name="guest"  />
                            <x-input-error :messages="$errors->get('form.guest')" class="mt-2" />
                        </div>

                    </div>
                      <div class="col-span-12 lg:col-span-4">
                        <div class="form-group">
                            <x-input-label for="room" value="Total Room" />
                            <x-text-input id="room" class="block mt-1 w-full" type="number" wire:model="form.no_of_rooms" name="room"  />
                            <x-input-error :messages="$errors->get('form.no_of_rooms')" class="mt-2" />
                        </div>

                    </div>
                      <div class="col-span-12 lg:col-span-4">
                        <div class="form-group">
                            <x-input-label for="reserved" value="Total Reserved" />
                            <x-text-input id="reserved" class="block mt-1 w-full" type="number" wire:model="form.no_reserved_room" name="reserved"  />
                            <x-input-error :messages="$errors->get('form.no_reserved_room')" class="mt-2" />
                        </div>

                    </div>
                     <div class="col-span-12 lg:col-span-4">
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
                    </div>
                </div>
                <div class="flex justify-center mt-3">
                    <x-primary-button type="submit" class="w-500"> Submit </x-primary-button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
