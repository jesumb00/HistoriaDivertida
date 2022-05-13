<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pie extends Component
{
    public $lugar;
    public $fecha;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lugar,$fecha)
    {
        $this->lugar=$lugar;
        $this->fecha=$fecha;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pie');
    }
}
