<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;

class ImageBreadcrumb extends Component
{
    public $title;
    public $url;
    public function render()
    {
        return view('livewire.frontend.components.image-breadcrumb');
    }
}
