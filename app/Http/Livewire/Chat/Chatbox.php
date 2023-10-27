<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageSent;
use App\Events\MessageRead;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Chatbox extends Component
{
    public $selectedcoversations;
    public $receiverInstance;
    public $messages_count;
    public $messages;
    public $height;
    public $paginateVar = 30;

    // protected $listeners = ['loadConversation','pushMessage','loadmore','updateHeight'];

    public function getListeners(){

        $auth_id = Auth::user()->id;
        // dd($auth_id);
        return [
            "echo-private:chat.{$auth_id},MessageSent" => 'broadcastedMessageReceived',
            "echo-private:chat.{$auth_id},MessageRead" => 'broadcastedMessageRead',
            'loadConversation','pushMessage','loadmore','updateHeight','brodcastMessageRead','resetComponent'
        ];
    }

    public function resetComponent(){
        $this->selectedcoversations = null;
        $this->receiverInstance = null;

    }


    public function broadcastedMessageRead($event){
        if($this->selectedcoversations){
            if((int) $this->selectedcoversations->id === (int) $event['conversation_id']){
                $this->dispatchBrowserEvent('markMessageAsRead');
            }
        }
    }

    public function broadcastedMessageReceived($event){

        $this->emitTo('chat.chat-list','refresh');

        $brodcastedMessage = Message::find($event['message']);

        if($this->selectedcoversations){
            if((int) $this->selectedcoversations->id === (int) $event['conversation_id']){
                $brodcastedMessage->read = 1;
                $brodcastedMessage->save();

                $this->pushMessage($brodcastedMessage->id);

                $this->emitSelf('brodcastMessageRead');

            }
        }


    }

    public function brodcastMessageRead(){
        broadcast(new MessageRead($this->selectedcoversations->id,$this->receiverInstance->id));
    }

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

        Message::where('conversation_id',$this->selectedcoversations->id)
        ->where('receiver_id',Auth::user()->id)
        ->where('read',0)
        ->update(['read' => 1]);

        $this->emitSelf('brodcastMessageRead');

    }

    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
