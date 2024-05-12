<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{


    public $title;

    // public function mount(?string $title = null){
    //     $this->title = $title;
    // }

    public function render()
    {
        return view('livewire.create-post', );
    }
}
