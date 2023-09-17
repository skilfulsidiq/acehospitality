<?php

namespace App\View\Components\Logo;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LogoTwo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type,public string $src)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.logo.logo-two');
    }
}
