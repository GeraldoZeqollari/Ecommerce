<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopexOffer extends Component
{
    public $image;
    public $text;
    public $description;

    public function mount($image, $text, $description)
    {
        $this->image = $image;
        $this->text = $text;
        $this->$description = $description;
    }

    public function render()
    {
        return view('livewire.shopex-offer');
    }
}
