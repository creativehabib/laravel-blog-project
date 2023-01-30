<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function Increase(){
        $this->count++;
        flash()->addSuccess('Your order has been shipped.');
    }
}
