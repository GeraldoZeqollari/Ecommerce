<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrendingProductsDiscount extends Component
{

    public $title;
    public $image;
    public $text;


    public function mount($title, $image, $text)
    {
        $this->text = $text;
        $this->image = $image;
        $this->title = $title;
    }
    
    public function render()
    {
        return view('livewire.trending-products-discount');
    }
}
