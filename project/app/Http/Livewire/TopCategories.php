<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TopCategories extends Component
{

    public $image;
    public $text;
    public $price;

    public function mount($image, $text, $price)
    {
        $this->image = $image;
        $this->text = $text;
        $this->price = $price;
    }
    
    public function render()
    {
        return view('livewire.top-categories');
    }
}
