<?php

namespace App\Livewire\Frontend\Components\PropertyCards;

use Livewire\Component;

class ListCard extends Component
{
    public $image;
    public $title;
    public $location;
    public function render()
    {
        return view('livewire.frontend.components.property-cards.list-card');
    }
}
