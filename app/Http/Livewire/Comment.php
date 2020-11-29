<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Comment as CommentModel;

class Comment extends Component
{
    public $comment;
    public $comments;
    public $post_id;
    public $user_id;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->user_id = Auth::id();
        $this->comments = CommentModel::with('post')->where('post_id', $this->post_id)->orderByDesc('created_at')->get();
    }

    public function submit()
    {
        $comment = new CommentModel([
            'post_id' => $this->post_id,
            'user_id' => $this->user_id,
            'comment' => encrypt($this->comment)
        ]);
        $comment->save();
        // TODO: Push in first element
        $this->comment = '';
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
