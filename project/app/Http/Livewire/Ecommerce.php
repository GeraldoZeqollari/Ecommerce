<?php

namespace App\Http\Livewire;

use App\Models\Sort;
use App\Models\Image;
use Livewire\Component;

class Ecommerce extends Component
{

    public $results;
    public $title;
    public $per_page;
    public $sort;
    public $view;
    public $foo;
    public $sorts;

    public function mount($results, $title, $per_page, $sort, $view)
    {
        $this->results = $results;
        $this->title = $title;
        $this->view = $view;
        $this->per_page = $per_page;
        $this->sort = $sort;
        $this->sorts = Sort::get();
    }

    public function updatedfoo($value)
    {
        $this->emit('sort', $value);
    }

    public function render()
    {
        return view('livewire.ecommerce');
    }
}
