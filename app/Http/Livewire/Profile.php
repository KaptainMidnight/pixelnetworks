<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function mount($id)
    {
        if (is_numeric($id)) {
            $this->user = User::findOrFail($id);
        } else {
            $this->user = User::whereShortLink($id)->get()[0];
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
