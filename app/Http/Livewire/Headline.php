<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Headline extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = Post::query()->where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.headline');
    }
}
