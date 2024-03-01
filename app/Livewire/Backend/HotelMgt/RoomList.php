<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Services\Hotel\HotelService;
use App\Services\RoomMgt\RoomService;
use Livewire\Component;
use Livewire\WithPagination;

class RoomList extends Component
{
    use WithPagination;
    public $perPage = 20;

    public $search = "";
    public function render()
    {
        $rooms = $this->query();
        return view('livewire.features.hotel-mgt.room-list',compact('rooms'));
    }
    public function query()
    {
        return appService(RoomService::class)->rooms($this->search)->paginate($this->perPage);
    }
}
