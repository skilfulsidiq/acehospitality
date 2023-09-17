<?php

namespace App\View\Components\PageSections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LocationProperties extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public String $title, public String $desc="")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-sections.location-properties');
    }
}
