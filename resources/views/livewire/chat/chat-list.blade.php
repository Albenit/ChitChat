<div>
    <div class="chatlist_header">
        <div class="title">
            Chat
        </div>
        <div class="img_container">
            <img class="img" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{Auth::user()->name}}" alt="">
        </div>

    </div>
    <div class="chatlist_body">
        @if (count($conversations) == 0)
            <span>You dont have any conversation</span>
        @else
            @foreach ($conversations as $item)
                <div class="chatlist_item" wire:click="$emit('chatUserSelected', {{ $item }}, {{ $this->getChatUserInstance($item, 'id') }})">
                    <div class="chatlist_img_container">
                        <img class="img"
                            src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($item, $name = 'name') }}"
                            alt="">
                    </div>
                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username">{{ $this->getChatUserInstance($item, $name = 'name') }}</div>
                            <span
                                class="date">{{ $item->messages->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>

                        <div class="bottom_row">

                            <div class="message_body text-truncate">
                                {{ $item->messages->last()->body }}
                            </div>

                            <div class="unread_count">
                                56
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
