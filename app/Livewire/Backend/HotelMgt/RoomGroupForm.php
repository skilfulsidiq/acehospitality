<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Services\Hotel\HotelService;
use App\Services\RoomMgt\RoomGroupService;
use App\Services\RoomMgt\RoomService;
use Livewire\Component;

class RoomGroupForm extends Component
{
    public $form = [
        'hotel_id'=>'',
        'name'=>'',
        'price'=>'',
        'bed'=>'',
        'bath'=>'',
        'guest'=>'',
        'status'=>'',
        'no_of_rooms'=>'',
        'no_reserved_room'=>'',
        'slug'=>''
    ];
    public $edit=false;
    public $room;
    public $slug;
    public function mount($slug=null)
    {


        if($slug){
            $this->edit=true;
            $this->slug = $slug;
            $this->getRoomDetails();

        }
    }
    public function getRoomDetails(){
        $room = appService(RoomGroupService::class)->findBySlug($this->slug);


        $this->prefilForm($room['data']);
    }
    public function prefilForm($item){

        $this->form['hotel_id'] = $item->hotel_id;
        $this->form['name'] = $item->name;
        $this->form['price'] = $item->price;
        $this->form['bed'] = $item->bed;
        $this->form['bath'] = $item->bath;
        $this->form['guest'] = $item->guest;
        $this->form['no_of_rooms'] = $item->no_of_rooms;
        $this->form['no_reserved_room'] = $item->no_reserved_room;
        $this->form['status'] = $item->status;
        $this->form['slug'] = $item->slug;
    }
    public function submit(){
      $form =   $this->validate(
            [
                'form.hotel_id' => 'required',
                'form.name' => 'required',
                'form.price' => 'required',
                'form.bed' => 'required',
                'form.bath' => 'required',
                'form.guest' => 'required',
                'form.status' => 'required',
                'form.no_of_rooms' => 'required',
                'form.no_reserved_room' => 'required'
            ]
        );
        // dd($form);
        $feedback = appService(RoomGroupService::class)->addRoomGroup($this->form);
        if ($feedback['status']) {
            $this->dispatchBrowserEvent('close-modal');
            return redirect()->route('room-group-list');
        }
    }
    public function render()
    {
        $hotels = $this->getHotelList();
        return view('livewire.features.hotel-mgt.room-group-form',compact('hotels'));
    }
    public function getHotelList()
    {
        return appService(HotelService::class)->getAllHotelName()['data'];
    }
}
