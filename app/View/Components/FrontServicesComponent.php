<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontServicesComponent extends Component
{
    public $services;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-services-component');
    }
}
