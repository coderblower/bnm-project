<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Counter extends Component
{

    public $count = 1;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $response = Http::get('https://api.api-ninjas.com/v1/jokes?limit=1');
        
        $this->count = $response->body();
    }
}
