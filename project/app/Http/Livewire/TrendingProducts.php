<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrendingProducts extends Component
{
    public $image;
    public $price;
    public $reduced_price;
    public $text;

    public function mount($image, $text, $price, $reduced_price)
    {
        $this->image = $image;
        $this->price = $price;
        $this->$reduced_price = $reduced_price;
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.trending-products');
    }
}
