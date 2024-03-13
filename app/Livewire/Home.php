<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Home extends Component
{
    public function user(): Collection
    {
        return User::all();
    }
    public function render()
    {
        return view('livewire.home', [
            'users' => $this->user()
        ]);
    }
}
