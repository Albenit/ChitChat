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
    public $height;
    public $paginateVar = 30;

    protected $listeners = ['loadConversation','pushMessage','loadmore','updateHeight'];

    public function pushMessage($messageId){
        $nemMessage = Message::find($messageId);
        $this->messages->push($nemMessage);

        $this->dispatchBrowserEvent('rowChatToBottom');
    }

    public function loadmore(){
        $this->paginateVar += 20;

        $this->loadConversation($this->selectedcoversations, $this->receiverInstance);

        $height = $this->height;
        $this->dispatchBrowserEvent('updatedHeight',($height));


    }

    public function updateHeight($height){
        $this->height = $height;
        
    }

    public function loadConversation(Conversation $conversation, User $receiver){

        $this->selectedcoversations = $conversation;
        $this->receiverInstance = $receiver;

        $this->messages_count = Message::where('conversation_id',$this->selectedcoversations->id)->count();

        $this->messages = Message::where('conversation_id',$this->selectedcoversations->id)
        ->skip($this->messages_count - $this->paginateVar)
        ->take($this->paginateVar)->get();

        

        $this->dispatchBrowserEvent('chatSelected');

    }

    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
