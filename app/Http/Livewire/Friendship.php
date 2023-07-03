<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use App\Models\Friendship as ModelsFriendship;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Friendship extends Component
{
    public $users;

    public function sendFriendRequest($recipient_id){
        ModelsFriendship::create([
            'sender_id' => Auth::user()->id,
            'recipient_id' => $recipient_id,
            'status' => 'pending'
        ]);
    }

    public function rejectFriendRequest($recipient_id){
        ModelsFriendship::where('sender_id',$recipient_id)->where('recipient_id',Auth::user()->id)->update([
            'status' => 'rejected'
        ]);
    }

    public function acceptFriendRequest($recipient_id){
        ModelsFriendship::where('sender_id',$recipient_id)->where('recipient_id',Auth::user()->id)->update([
            'status' => 'accepted'
        ]);

        Conversation::create([
            'receiver_id' => $recipient_id,
            'sender_id' => Auth::user()->id,
            'last_time_message' => Carbon::now()
        ]);
    }


    public function render()
    {
        $this->users = User::where('id','<>',Auth::user()->id)->get();

        return view('livewire.friendship');
    }
}
