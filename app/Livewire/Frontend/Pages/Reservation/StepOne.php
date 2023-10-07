<?php

namespace App\Livewire\Frontend\Pages\Reservation;

use App\Services\Booking\AvailabilityService;
use Livewire\Component;
use Livewire\Attributes\On;

class StepOne extends Component
{

    public $booking_form;
    public $rooms_list;
    public function mount(){
        $this->rooms = collect();
        // $this->booking_form = getBookingFormDetail();

    }
    public function render()
    {

        $available_rooms = $this->checkAvailability();
        return view('livewire.frontend.pages.reservation.step-one',compact('available_rooms'));
    }

    #[On('available-room-list')]
    public function getAvailableRoomList($data){
        // dd($data);
       $this->booking_form = $data;
    }

    public function checkAvailability(){
        $hotel_id = request()->hotel_id;
        $date = request()->date;

        $feedback = appService(AvailabilityService::class)->checkForRoomAvailability(compact('hotel_id','date'));
        $data = $feedback['data'];

        return $data['availables'];
        // if(!empty($this->booking_form)){
        //     //check
        // }else{
        //     $this->js("alert('select hotel and date')");
        // }
    }
}
