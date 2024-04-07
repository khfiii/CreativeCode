<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Home extends Component
{

    public function hapus()
    {
    dd('item dihapus');
    }

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.home', [

        ]);
    }
}
