<?php

namespace App\Livewire\Frontend\Pages;

use App\Repositories\GeneralRepository;
use Livewire\Component;
use Livewire\Attributes\Rule;

class EventDetailPage extends Component
{
    public $slug;

    #[Rule('required')]
    public $fullname;
    #[Rule('required|email',)]
    public $email;
    #[Rule('required', )]
    public $phone;
    #[Rule('required',)]
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

    public function submit()
    {
        $validated = $this->validate();

        dd($validated);
    }
}
