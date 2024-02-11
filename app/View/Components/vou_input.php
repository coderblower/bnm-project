<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class vou_input extends Component
{

    public $name;
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function show_email(){
        return "Hello";
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vou_input');
    }
}
