<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Guestmode extends Component
{
    public $name;
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
        return view('components.guestmode');
    }
}
