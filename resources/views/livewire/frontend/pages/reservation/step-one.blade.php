<div>
        <div class="d-flex justify-content-center">
            <div class="col-md-10 mt-15">

                <livewire:frontend.components.date-picker.dark class="card card-check-room check-room-hero" />
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            @forelse ($available_rooms as $room )
                 <div class="col-md-10">
                <livewire:frontend.components.property-cards.version-one />
            </div>
            @empty

            @endforelse

            <div class="col-md-10">
                {{-- <livewire:frontend.components.property-cards.version-one /> --}}
            </div>

        </div>




</div>
