<?php

namespace App\Livewire\Frontend\Pages;

use App\Repositories\GeneralRepository;
use Livewire\Component;

class EventPage extends Component
{
    public function render()
    {
        $rooms = $this->getConRoom();
        return view('livewire.frontend.pages.event-page',compact('rooms'));
    }


    public function getConRoom(){
        $feedbacks = appService(GeneralRepository::class)->getConferenceRoomList();
       
        return $feedbacks;
    }
}
