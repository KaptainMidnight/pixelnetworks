<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
