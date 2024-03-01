<?php

namespace App\Http\Livewire\Features\BookingMgt\Components;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;


class CreateRoomBookingModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.features.booking-mgt.components.create-room-booking-modal');
    }
}
