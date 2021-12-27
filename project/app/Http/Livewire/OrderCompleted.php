<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderCompleted extends Component
{

    public $image;
    public $title;
  

    public function mount($image, $title)
    {
        $this->image = $image;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.order-completed');
    }
}
