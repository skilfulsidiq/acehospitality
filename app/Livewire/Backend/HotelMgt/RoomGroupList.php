<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Services\Hotel\HotelService;
use App\Services\RoomMgt\RoomGroupService;
use Livewire\Component;
use Livewire\WithPagination;

class RoomGroupList extends Component
{
    use WithPagination;
    public $perPage = 20;

    public $search = "";
    public function render()
    {
        $rooms = $this->query();
        return view('livewire.features.hotel-mgt.room-group-list',compact('rooms'));
    }
   public function query(){
        return appService(RoomGroupService::class)->roomGroups($this->search)->paginate($this->perPage);
   }
}
