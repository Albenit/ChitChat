<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class ChatList extends Component
{
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedCoversation;
    public $searchNewCoverUser;
    public $searchedUsersForNewConver = [];

    protected $listeners = ['chatUserSelected','refresh' => '$refresh','resetComponent'];

    protected $rules = [
        'searchNewCoverUser' => 'min:3', // Define your validation rules here
    ];


    public function resetComponent(){
        $this->selectedCoversation = null;
        $this->receiverInstance = null;

    }

    public function chatUserSelected(Conversation $conversation, $receiverId){


        $this->selectedCoversation = $conversation;

        $receiverInstance = User::find($receiverId);

        $this->emitTo('chat.chatbox','loadConversation',$this->selectedCoversation,$receiverInstance);

        $this->emitTo('chat.send-message','updateSendMessage',$this->selectedCoversation,$receiverInstance);



    }

    public function getChatUserInstance(Conversation $conversation, $request){

        if($conversation->sender_id == Auth::user()->id){
            $this->receiverInstance = User::where('id',$conversation->receiver_id)->first();
        }else{
            $this->receiverInstance = User::where('id',$conversation->sender_id)->first();
        }

        if(isset($request)){
            return $this->receiverInstance->$request;
        }
    }

    public function mount(){
        $this->conversations = Conversation::
        where('sender_id',Auth::user()->id)
        ->orWhere('receiver_id',Auth::user()->id)
        ->orderBy('last_time_message','DESC')
        ->get();
    }


    public function render()
    {
        if(isset($this->searchNewCoverUser)){
            $this->searchedUsersForNewConver = User::where('id','<>',Auth::user()->id)->where('name','LIKE',"%".$this->searchNewCoverUser."%")->get();
        }
        return view('livewire.chat.chat-list');
    }
}
