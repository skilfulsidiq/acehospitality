<?php

namespace App\Livewire\Frontend\Pages\Reservation;

use Livewire\Component;
use Livewire\Attributes\Rule;

class ConferenceBookingForm extends Component
{
    #[Rule('required')]
    public $fullname;
    #[Rule('required|email')]
    public $email;
    #[Rule('required' )]
    public $phone;
    #[Rule('required' )]
    public $date;
    public function render()
    {
        return view('livewire.frontend.pages.reservation.conference-booking-form');
    }

    public function submit()
    {
        $validated = $this->validate();

        dd($validated);
    }
}
