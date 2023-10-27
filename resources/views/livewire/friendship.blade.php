<div>
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)
        @php
            $friendship = App\Models\Friendship::
            where(function($query) use($user){
                $query->where('sender_id',Auth::user()->id)
                ->where('recipient_id',$user->id);
            })->orWhere(function($query) use($user){
                $query->where('recipient_id',Auth::user()->id)
                ->where('sender_id',$user->id);
            })->first();
            @endphp
        <div class="list-group-item list-group-item-action row" >
            <div class="col">
                <span>{{$user->name}}</span>
            </div>
            <div class="col-auto">
                <div class="justify-content-end d-flex">
                    @if ($friendship)
                        @if ($friendship->status == 'pending')
                            @if ($friendship->sender_id == Auth::user()->id)
                                <span class="btn btn-primary">Pending</span>
                            @else
                                <span class="btn btn-danger me-2" wire:click="rejectFriendRequest({{$user->id}})">Reject</span>
                                <span class="btn btn-success" wire:click="acceptFriendRequest({{$user->id}})">Accept</span>
                            @endif
                        @elseif ($friendship->status == 'accepted' || $friendship->status == 'rejected')
                            <span class="btn btn-info">{{ucfirst($friendship->status) }}</span>
                        @endif
                    @else
                        <button class="btn btn-info" wire:click="sendFriendRequest({{$user->id}})">
                            Add Friend
                        </button>
                    @endif
                </div>
            </div>
            </div>
        @endforeach
    </ul>
</div>
