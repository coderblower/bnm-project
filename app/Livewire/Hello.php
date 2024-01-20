<?php

namespace App\Livewire;

use Livewire\Component;

class Hello extends Component
{

    public $show = true;
    public function render()
    {
        return view('livewire.hello');
    }

    public function callToShow(){
        $this->show = !$this->show;
    }
}
