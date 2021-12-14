<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EcommerceItems extends Component
{

    public $image;
    public $price;
    public $title;
    public $reduced_price;

    public function mount($image, $price, $reduced_price, $title)
    {
        $this->image = $image;
        $this->price = $price;
        $this->reduced_price = $reduced_price;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.ecommerce-items');
    }
}
