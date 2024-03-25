<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarTab extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $icon, public string $name)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-tab');
    }
}
