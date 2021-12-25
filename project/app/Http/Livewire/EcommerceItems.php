<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class EcommerceItems extends Component
{

    // public $image;
    // public $price;
    // public $title;
    // public $reduced_price;
    use WithPagination;

    public function mount()
    {
        // $this->image = $image;
        // $this->price = $price;
        // $this->reduced_price = $reduced_price;
        // $this->title = $title;
        
    }

    public function render()
    {
        return view('livewire.ecommerce-items', [
            'images'=>Image::paginate(2)
        ]);
    }
}
