<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class Chatbox extends Component
{
    public $selectedcoversations;
    public $receiverInstance;
    public $messages_count;
    public $messages;
    public $paginateVar = 10;

    protected $listeners = ['loadConversation','pushMessage'];

    public function pushMessage($messageId){
        $nemMessage = Message::find($messageId);
        $this->messages->push($nemMessage);
    }

    public function loadConversation(Conversation $conversation, User $receiver){

        $this->selectedcoversations = $conversation;
        $this->receiverInstance = $receiver;

        $this->messages_count = Message::where('conversation_id',$this->selectedcoversations->id)->count();

        $this->messages = Message::where('conversation_id',$this->selectedcoversations->id)
        ->get();

        $this->dispatchBrowserEvent('chatSelected');


        // dd($this->messages);
    }

    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
