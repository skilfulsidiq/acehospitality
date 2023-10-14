<?php

namespace App\Livewire\Frontend\Pages\Hotels;

use App\Models\Hotel;
use Livewire\Component;

class HotelDetails extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }


    public function render()
    {
        $hotel = $this->fetchHotelDetail();
        return view('livewire.frontend.pages.hotels.hotel-details',compact('hotel'));
    }

    public function fetchHotelDetail()
    {
        $hotel = Hotel::where('slug',$this->slug)->first();
        if($hotel){
            return $hotel;
        }
        abort('404');

    }
}
