<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopListItems extends Component
{

    public $title;
    public $description;
    public $image;
    public $price;
    public $reduced_price;
  

    public function mount($title, $description, $image, $price, $reduced_price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->reduced_price = $reduced_price;
      
    }
    
    public function render()
    {
        return view('livewire.shop-list-items');
    }
}
