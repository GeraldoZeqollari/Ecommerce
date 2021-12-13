<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeaturedProducts extends Component
{

    public $price;
    public $title;
    public $code;

    public function mount($price, $title, $code)
    {
        $this->price = $price;
        $this->title = $title;
        $this->code = $code;
    }

    public function render()
    {
        return view('livewire.featured-products');
    }
}
