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


    public $shopgrid = [];
    protected $listeners = ['sort'];


    public function mount()
    {
        // $this->image = $image;
        // $this->price = $price;
        // $this->reduced_price = $reduced_price;
        // $this->title = $title;
        $this->shopgrid = Image::get();
    }

    public function sort($dat)
    {

        if ($dat == 1) {
            $this->shopgrid = Image::all()->sortBy('title');
        } else if ($dat == 2) {
            $this->shopgrid = Image::all()->sortByDesc('title');
        }
    }

    public function render()
    {
        return view('livewire.ecommerce-items', [
            'shopgrid' => $this->shopgrid
        ]);
    }
}
