<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pension extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pension;
    public function __construct($pension)
    {
        $this->pension = $pension;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pension');
    }
}