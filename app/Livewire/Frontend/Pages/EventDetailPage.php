<?php

namespace App\Livewire\Frontend\Pages;

use App\Repositories\GeneralRepository;
use Livewire\Component;

class EventDetailPage extends Component
{
    public $slug;

    public $fullname;
    public $email;
    public $phone;
    public $date;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $details = $this->fetchDetails();
        return view('livewire.frontend.pages.event-detail-page',compact('details'));
    }

    public function fetchDetails(){
      return appService(GeneralRepository::class)->getConferenceRoomDetails($this->slug);
    }
}
