<?php

namespace App\View\Components\main;

use Illuminate\View\Component;

class card extends Component
{
    public $color;
   
    public function __construct($color = 'blue')
    {
        //
        $this->color=$color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main.card');
    }
}
