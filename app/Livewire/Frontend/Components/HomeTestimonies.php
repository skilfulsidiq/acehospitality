<?php

namespace App\Livewire\Frontend\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeTestimonies extends Component
{
    public function render()
    {
        $list = $this->query();
        return view('livewire.frontend.components.home-testimonies',compact('list'));
    }

    public function query(){
        return DB::table('testimonials')->where('is_active',1)->inRandomOrder()->limit(6)->get();
    }
}
