<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as PostModel;

class Post extends Component
{
    public $post;

    public function mount(PostModel $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
