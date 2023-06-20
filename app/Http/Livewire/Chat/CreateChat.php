<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CreateChat extends Component
{
    public $users;
    public $helloMessage = 'Hello';

    public function checkConversation($receiverId){
        $auth_id = Auth::user()->id;
        $checkconversation = Conversation::where('receiver_id', $auth_id)->where('sender_id',$receiverId)->orWhere('receiver_id',$receiverId)->where('sender_id',$auth_id)->get();

        if(count($checkconversation) == 0){

            $createconversation = Conversation::create([
                'receiver_id' => $receiverId,
                'sender_id' => $auth_id,
                'last_time_message' => Carbon::now()
            ]);

            $createMessage = Message::create([
                'conversation_id' => $createconversation->id,
                'sender_id' => $auth_id,
                'receiver_id' => $receiverId,
                'body' => $this->helloMessage
            ]);

            $createconversation->last_time_message = $createMessage->created_at;
            $createconversation->save();

            dd('Conversation Created');

        }else if(count($checkconversation) >= 1){
            dd('Conversation Exist');
        }

    }


    public function render()
    {
        $this->users = User::where('id','!=',Auth::user()->id)->get();
        return view('livewire.chat.create-chat');
    }
}
