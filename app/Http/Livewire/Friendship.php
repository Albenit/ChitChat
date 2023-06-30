<?php

namespace App\Http\Livewire;

use App\Models\FriendshipRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Friendship extends Component
{
    public $users;

    public function sendFriendRequest($friendId){
        FriendshipRequest::create([
            'request_from' => Auth::user()->id,
            'request_to' => $friendId
        ]);
    }


    public function render()
    {
        $this->users = User::where('id','<>',Auth::user()->id)->get();

        return view('livewire.friendship');
    }
}
