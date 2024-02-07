<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Leave extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $leave;
    public function __construct($leave)
    {
        $this->leave = $leave;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.leave');
    }
}
