<div>
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)
            @php
                $friendshipRequest = App\Models\FriendshipRequest::where('request_from',Auth::user()->id)->where('request_to',$user->id)->first();
            @endphp
            <div class="list-group-item list-group-item-action" >
                <span>{{$user->name}}</span>
                <span class="justify-content-end d-flex">
                    @if ($friendshipRequest)
                            <span class="btn btn-secondary">{{ucfirst($friendshipRequest->status)}}</span>
                        @else
                            <button class="btn btn-info" wire:click="sendFriendRequest({{$user->id}})">
                                Add Friend
                            </button>
                    @endif
                </span>
            </div>
        @endforeach
    </ul>
</div>