<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Reactive;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Home extends Component
{

    public $data = 'Ashabul kahfi';

    public function render()
    {
        return view('livewire.home', [

        ]);
    }
}
