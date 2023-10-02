<?php

namespace App\Livewire\Frontend\Pages\Reservation;

use Livewire\Component;

class MainPage extends Component
{
    public $step = 1;
    public $totalStep = 4;


    public function render()
    {
        return view('livewire.frontend.pages.reservation.main-page');
    }

    public function nextStep(){
        if($this->step < $this->totalStep)$this->step++;

    }
    public function previousStep(){
       if($this->step> 1) $this->step--;
    }
}
