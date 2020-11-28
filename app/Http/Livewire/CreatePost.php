<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    protected $listeners = ['createNewPost' => 'createPost'];
    public $title;
    public $description;

    public function createPost()
    {
        \App\Models\Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => Auth::id()
        ]);

        $this->title = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
