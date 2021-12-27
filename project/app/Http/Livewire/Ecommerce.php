<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ecommerce extends Component
{

    public $results;
    public $title;
    public $per_page;
    public $sort;
    public $view;

    public function mount($results, $title, $per_page, $sort, $view)
    {
        $this->results = $results;
        $this->title = $title;
        $this->view = $view;
        $this->per_page = $per_page;
        $this->sort = $sort;
    }
    
    public function render()
    {
        return view('livewire.ecommerce');
    }
}
