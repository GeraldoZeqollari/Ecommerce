<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LatestProducts extends Component
{
    public $price;
    public $title;
    public $reduced_price;

    public function mount($price, $title, $reduced_price)
    {
        $this->price = $price;
        $this->title = $title;
        $this->reduced_price = $reduced_price;
    }
    public function render()
    {
        return view('livewire.latest-products');
    }
}
