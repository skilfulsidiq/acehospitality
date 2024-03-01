<?php

namespace App\Http\Livewire\Components\CounterCards;

use Livewire\Component;

class FirstCounterCard extends Component
{
    public $title;
    public $value;
    public $icon= "fa fa-users";
    public $color= "icon-shape-primary";
    public function render()
    {
        return view('livewire.components.counter-cards.first-counter-card');
    }
}
