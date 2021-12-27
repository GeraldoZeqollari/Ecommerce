<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LatestProducts extends Component
{
    public $price;
    public $image;
    public $title;
    public $reduced_price;

    public function mount($price, $title, $reduced_price, $image)
    {
        $this->price = $price;
        $this->title = $title;
        $this->reduced_price = $reduced_price;
        $this->image = $image;
    }
    
    public function render()
    {
        return view('livewire.latest-products');
    }
}
