<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Services\Hotel\HotelService;
use App\Services\RoomMgt\RoomService;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;
    public $perPage=20;

    public $search="";
    // public $hotels;
    public function render()
    {
        $hotels = $this->query();
        return view('livewire.features.hotel-mgt.hotel-list',compact('hotels'));
    }
    public function query(){
        $data = appService(RoomService::class)->allQuery($this->search)->paginate($this->perPage);
        return $data;
    }
}
