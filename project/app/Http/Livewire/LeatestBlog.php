<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeatestBlog extends Component
{

    public $image;
    public $text;
    public $date;
    public $title;
    public $description;

    public function mount($image, $text, $date, $title, $description)
    {
        $this->image = $image;
        $this->text = $text;
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    public function render()
    {
        return view('livewire.leatest-blog');
    }
}
