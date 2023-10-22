<?php

namespace App\Livewire\Frontend\Pages\Hotels;

use App\Models\Location;
use App\Repositories\GeneralRepository;
use Livewire\Component;

class HotelListPage extends Component
{
    public function render()
    {
        $locations = $this->fetchHotelList();
        return view('livewire.frontend.pages.hotels.hotel-list-page',compact('locations'));
    }

    public function fetchHotelList(){

        $feedback = appService(GeneralRepository::class)->getHotelsByLocation();
        return $feedback;
    }
}
