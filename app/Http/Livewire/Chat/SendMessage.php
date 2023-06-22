<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageSent;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $body;
    public $message;
    protected $listeners = ['updateSendMessage','dispatchMessageSent'];

    function updateSendMessage(Conversation $conversation,User $receiver){
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;

    }

    public function sendMessage(){

        if($this->body == null){
            return null;
        }

        $this->message = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => Auth::user()->id,
            'receiver_id' => $this->receiverInstance->id,
            'body' => $this->body
        ]);
        
        $this->selectedConversation->last_time_message = $this->message->created_at;
        $this->selectedConversation->save();

        $this->emitTo('chat.chatbox','pushMessage',$this->message->id);

        $this->emitTo('chat.chat-list','refresh');

        $this->reset('body');

        $this->emitSelf('dispatchMessageSent');
    }  

    public function dispatchMessageSent(){
        broadcast(new MessageSent(Auth::user(),$this->message,$this->selectedConversation,$this->receiverInstance));
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
