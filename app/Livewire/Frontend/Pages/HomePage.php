<?php

namespace App\Livewire\Frontend\Pages;

use App\Traits\SeoTrait;
use Livewire\Component;

class HomePage extends Component
{
    use SeoTrait;
    public function render()
    {

        $SEOData =  $this->generateSeoData("Ace Hospitlity","Luxury Hotel");
        return view('livewire.frontend.pages.home-page',compact('SEOData'));
    }
}
