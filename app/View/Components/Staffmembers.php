<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Staffmembers extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($name)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.staffmembers');
    }
}
