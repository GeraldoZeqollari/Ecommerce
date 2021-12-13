<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductTitle extends Component
{

    public $title_text;

    public function mount($title_text)
    {
        $this->title_text = $title_text;
    }
    public function render()
    {
        return view('livewire.product-title');
    }
}
