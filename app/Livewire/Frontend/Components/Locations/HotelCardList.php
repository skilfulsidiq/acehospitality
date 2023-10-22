<?php

namespace App\Livewire\Frontend\Components\Locations;

use App\Services\Hotel\HotelService;
use Livewire\Component;

class HotelCardList extends Component
{
    public function render()
    {
        $hotels = $this->hotels();
        return view('livewire.frontend.components.locations.hotel-card-list',compact('hotels'));
    }

    public function hotels(){
        $feedback = appService(HotelService::class)->getAllHotels();
        return $feedback['data'];
    }
}
