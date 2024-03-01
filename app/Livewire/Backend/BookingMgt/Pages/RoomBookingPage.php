<?php

namespace App\Http\Livewire\Features\BookingMgt\Pages;

use App\Services\Booking\RoomBookingService;
use Livewire\Component;
use Livewire\WithPagination;

class RoomBookingPage extends Component
{
    use WithPagination;
    public $search="";
    public $perPage=20;

    public function render()
    {
        $bookings = $this->query();
        return view('livewire.features.booking-mgt.pages.room-booking-page',compact('bookings'));
    }
    public function query(){
        $arr = ['search'=>$this->search,'perPage'=>$this->perPage];
        $feedback = appService(RoomBookingService::class)->getAllRoomBookings($arr)['data'];
        // dd($feedback);
        return $feedback;
    }
}
