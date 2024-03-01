<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Services\Hotel\HotelService;
use App\Services\RoomMgt\RoomGroupService;
use App\Services\RoomMgt\RoomService;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class RoomForm  extends ModalComponent

{
    public $form = [
        'hotel_id'=>'',
        'room_group_id'=>'',
        'room_number'=>'',
        'status'=>'',
        'slug'=>''
    ];
    public $groups;
    public $edit=false;
    public function mount($slug=null){
        $this->groups = collect();
        if($slug){
            $this->edit=true;
            $this->getRoomDetails();
        }
    }
    public function getRoomDetails()
    {
        $hotel =appService(RoomService::class)->find($this->slug);
        $this->prefil($hotel['data']);
    }
    public function updatedFormHotelId($value){
       $this->getRoomGroupName($value);
    }
    public function prefil($item)
    {
        $this->form['hotel_id'] = $item->hotel_id;
        $this->form['room_group_id'] = $item->room_group_id;
        $this->form['room_number'] = $item->room_number;
        $this->form['status'] = $item->status;
        $this->form['slug'] = $item->id;
    }
    public function submit(){
        $this->validate([
            'form.hotel_id' => 'required',
            'form.room_group_id' => 'required',
            'form.room_number' => 'required',
            'form.status' => 'required'
        ]);
        // dd($this->form);
        $feedback = appService(RoomService::class)->addRoomGroup($this->form);
        if ($feedback['status']) {
            $this->dispatchBrowserEvent('close-modal');
            return redirect()->route('room-list');
        }
    }
    public function render()
    {
        $hotels = $this->getHotelList();
        // $groups = $this->getRoomGroupName();
        return view('livewire.features.hotel-mgt.room-form',compact('hotels'));
    }
    public function getHotelList()
    {
        return appService(HotelService::class)->getAllHotelName()['data'];
    }
    public function getRoomGroupName($id)
    {
       $t =  appService(RoomGroupService::class)->getAllRoomGroupByHotelId($id)['data'];

        $this->groups = $t;
        // dd($this->groups);
    //    return $t;
    }
}
