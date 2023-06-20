<div>
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)
            <div class="list-group-item list-group-item-action" wire:click="checkConversation({{$user->id}})">{{$user->name}}</div>
        @endforeach
    </ul>
</div>
