<?php

namespace App\Livewire\Frontend\Pages;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        $teams = $this->teams();
        return view('livewire.frontend.pages.about-page',compact('teams'));
    }

    public function teams(){
        return DB::table('teams')->get();
    }
}
