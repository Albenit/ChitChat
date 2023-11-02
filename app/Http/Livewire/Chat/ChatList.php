<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Carbon\Carbon;


class ChatList extends Component
{
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedCoversation;
    public $search_users;
    public $users_without_conversation;

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

    public function createNewConversation($user_id) {

        $conversation = Conversation::where(function($query) use ($user_id){
            $query->where('sender_id',Auth::user()->id)
            ->where('receiver_id',$user_id);
        })->orWhere(function($query) use ($user_id){
            $query->where('sender_id',$user_id)
            ->where('receiver_id',Auth::user()->id);
        })->first();

        if(!$conversation){
            Conversation::create([
                'receiver_id' => $user_id,
                'sender_id' => Auth::user()->id,
                'last_time_message' => Carbon::now()
            ]);
            $conversation = Conversation::where('sender_id',Auth::user()->id)->where('receiver_id',$user_id)->first();
        }


        $this->emit('chatUserSelected',$conversation, $user_id);

        $this->returnConversation();

        $this->users_without_conversation = [];
        $this->search_users = '';
    }

    public function returnConversation(){
        $this->conversations = Conversation::
        where('sender_id',Auth::user()->id)
        ->orWhere('receiver_id',Auth::user()->id)
        ->orderBy('last_time_message','DESC')
        ->get();
    }

    public function render()
    {
        if($this->search_users != ''){
            $this->users_without_conversation = User::where('id','<>',Auth::user()->id)->where('name','like','%'.$this->search_users.'%')->get();
        }else{
            $this->users_without_conversation = [];
        }

        $this->returnConversation();

        return view('livewire.chat.chat-list');
    }
}
