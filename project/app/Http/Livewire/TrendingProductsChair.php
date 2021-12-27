<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrendingProductsChair extends Component
{
    public $price;
    public $image;
    public $text;


    public function mount($price, $image, $text)
    {
        $this->text = $text;
        $this->image = $image;
        $this->price = $price;
    }
    
    public function render()
    {
        return view('livewire.trending-products-chair');
    }
}
