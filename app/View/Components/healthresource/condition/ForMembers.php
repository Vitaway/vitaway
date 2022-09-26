<?php

namespace App\View\Components\healthresource\condition;

use Illuminate\View\Component;

class ForMembers extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.healthresource.condition.for-members');
    }
}
