<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $showingCatModal = false;

    public function showCatModal()
    {
        $this->showingCatModal = true;
    }
    public function render()
    {
        return view('livewire.category');
    }
}
