<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $type;
    public $name;
    public $demo;
   
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $type, $name, $demo=0)
    {
        $this->label=$label;
        $this->type=$type;
        $this->name=$name;
        $this->demo=$demo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
