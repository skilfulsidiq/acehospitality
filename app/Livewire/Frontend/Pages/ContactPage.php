<?php

namespace App\Livewire\Frontend\Pages;

use App\Traits\SendMailTrait;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ContactPage extends Component
{
    use SendMailTrait;
    #[Rule('required')]
    public $fullname;
    #[Rule('required|email')]
    public $email;
    #[Rule('required|min:10')]
    public $phone;

    #[Rule('required')]
    public $message;

    public function render()
    {
        return view('livewire.frontend.pages.contact-page');
    }

    public function submit(){
        $validated = $this->validate();
        $this->sendContactEnquiery($validated);
        $this->fullname = "";
        $this->phone="";
        $this->email = "";
        $this->message = "";

    }
}
