<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopGrid extends Component
{

    public $title;
    public $text;

    public function mount($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
    public function render()
    {
        return view('livewire.shop-grid');
    }
}
