<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Logo extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.logo');
    }
}
