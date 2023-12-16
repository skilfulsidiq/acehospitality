<?php

namespace App\Livewire\Frontend\Pages;

use App\Repositories\GeneralRepository;
use App\Services\Booking\ConferenceBookingService;
use Livewire\Component;
use Livewire\Attributes\Rule;

class EventDetailPage extends Component
{
    public $slug;

    #[Rule('required')]
    public $fullname;
    public $hotel_id;
    public $confenrence_room_id;
    public $name;
    #[Rule('required|email',)]
    public $email;
    #[Rule('required', )]
    public $phone;
    #[Rule('required',)]
    public $start_date;
    #[Rule('required',)]
    public $end_date;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $details = $this->fetchDetails();
        $images = explode(",",$details->images);
       
        $this->hotel_id = $details->hotel_id;
        $this->confenrence_room_id = $details->id;
        $this->name = $details->name;
        return view('livewire.frontend.pages.event-detail-page',compact('details','images'));
    }

    public function fetchDetails(){
      return appService(GeneralRepository::class)->getConferenceRoomDetails($this->slug);
    }

    public function submit()
    {
        $validated = $this->validate();


      $validated['hotel_id'] = $this->hotel_id;
      $validated['confenrence_room_id'] = $this->confenrence_room_id;
      $validated['name'] = $this->name;



        $feedback = appService(ConferenceBookingService::class)->saveBookings($validated);

        if ($feedback['status']) {
            clearCart();
            session()->flash('message', 'Your booking was sent successfully. We will contact you very soon!');
            return redirect()->route('reservation-success'); // this is coming from booking helper
        }
    }
}
