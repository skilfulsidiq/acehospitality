<div>
        {{-- <div class="d-flex justify-content-center">
            <div class="col-md-10 mt-15">

                <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" />
            </div>

        </div>
        <div class="row d-flex justify-content-center"> --}}
            @forelse ($available_rooms as $key=> $room )
                 {{-- <div class="col-md-10" wire:key="{{ $key }}"> --}}
                    <livewire:frontend.components.property-cards.version-one :room="$room" :date="$date" wire:key="{{ $key }}"  />
                {{-- @includeIf('includes.room-cards.booking_card',[
                    'room'=>$room,
                    'date'=>$date
                ]) --}}
            {{-- </div> --}}
            @empty

            @endforelse

            {{-- <div class="col-md-10">
            </div>

        </div> --}}




</div>
