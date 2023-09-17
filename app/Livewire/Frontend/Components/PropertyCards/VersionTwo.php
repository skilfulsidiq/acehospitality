<?php

namespace App\Livewire\Frontend\Components\PropertyCards;

use Livewire\Component;

class VersionTwo extends Component
{
    public $image;
    public $title;
    public $location;
    public function render()
    {
        return view('livewire.frontend.components.property-cards.version-two');
    }
}
