<?php

namespace App\Livewire\Frontend\Components\PropertyCards;

use Livewire\Component;

class VersionOne extends Component
{
    public $img;
    public $title;

    public $location;
    public function render()
    {
        return view('livewire.frontend.components.property-cards.version-one');
    }
}