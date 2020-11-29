<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User as UserModel;

class Friends extends Component
{
    public $friends;
    public $requests = [];
    public $friendsAccepted;

    public function mount()
    {
        $this->friendsAccepted = Auth::user()->getFriends();
        $this->friends = UserModel::query()->whereNotIn('id', Auth::user()->getAcceptedFriendships()->map(function($item) {
            return $item->recipient_id;
        }))->get();
        foreach(Auth::user()->getPendingFriendships() as $friend)
        {
            $this->requests[] = UserModel::find($friend->recipient_id);
        }
    }

    public function send($recipient)
    {
        $user = Auth::user();
        $recipientModel = UserModel::find($recipient);
        $user->befriend($recipientModel);

        unset($this->requests[array_search($recipientModel, $this->requests)]);
    }

    public function accept($sender)
    {
        $user = Auth::user();
        $sender = UserModel::find($sender);
        $user->acceptFriendRequest($sender);

        unset($this->requests[array_search($sender, $this->requests)]);
        $this->friendsAccepted[] = $sender;
    }

    public function deny($sender)
    {
        $user = Auth::user();
        $sender = UserModel::find($sender);
        $user->denyFriendRequest($sender);

        unset($this->requests[array_search($sender, $this->requests)]);
    }

    public function render()
    {
        return view('livewire.friends');
    }
}
