<x-app-layout>
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-3 list-group">
                <a href="#" class="list-group-item list-group-item-action active" id="sideMenuList1"
                    onclick="openSidemenuContent(1)">Friends</a>
                <a href="#" class="list-group-item list-group-item-action" id="sideMenuList2"
                    onclick="openSidemenuContent(2)">Request
                    List</a>
            </div>
            <div class="col-9">
                <div id="sidemenu1">
                    <ul class="list-group">
                        @if (count($friends) == 0)
                            <div class="text-center">
                                <span class="list-group-item">No Friends Found</span>
                            </div>
                        @endif
                        @foreach ($friends as $friend)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>
                                    "{{ $friend->senderUserName->name }} -> {{ $friend->recipientUserName->name }}"
                                </span>
                                <span>
                                    Friends Since: {{ $friend->created_at }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="sidemenu2" style="display: none">
                    <ul class="list-group">
                        @if (count($requestfriendsList) == 0)
                            <div class="text-center">
                                <span class="list-group-item">No Users Found</span>
                            </div>
                        @endif
                        @foreach ($requestfriendsList as $user)
                            @php
                                $friendship = App\Models\Friendship::where(function ($query) use ($user) {
                                    $query->where('sender_id', Auth::user()->id)->where('recipient_id', $user->id);
                                })
                                    ->orWhere(function ($query) use ($user) {
                                        $query->where('recipient_id', Auth::user()->id)->where('sender_id', $user->id);
                                    })
                                    ->first();
                            @endphp
                            @if ($friendship)
                                @if ($friendship->status != 'accepted')
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $user->name }}
                                        <span class="badge ">
                                            @if ($friendship->status == 'pending')
                                                @if ($friendship->sender_id == Auth::user()->id)
                                                    <span class="btn btn-primary">Pending</span>
                                                @else
                                                    <span id="rejectBtnFeedback{{ $friendship->id }}" class="btn btn-danger me-2" onclick="feedbackFriendRequest('reject',{{ $friendship->id }})">Reject</span>
                                                    <span id="acceptBtnFeedback{{ $friendship->id }}" class="btn btn-success" onclick="feedbackFriendRequest('accept',{{ $friendship->id }})">Accept</span>
                                                    <span id="feedback_message{{ $friendship->id }}"></span>
                                                @endif
                                            @endif
                                        </span>
                                    </li>
                                @else
                                    <div class="text-center">
                                        <span class="list-group-item">No Users Found</span>
                                    </div>
                                @endif
                            @else
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $user->name }}
                                    <span class="badge">
                                        <button class="btn btn-info" id="addBtnRequest{{ $user->id }}" onclick="sendFriendRequest({{ $user->id }})">
                                            Add Friend
                                        </button>
                                        <span class="btn btn-primary" id="pendingBtnAfterRequest{{ $user->id }}" style="display: none">Pending</span>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    function openSidemenuContent(menuNumber) {
        const allSidemenuContent = document.querySelectorAll('[id^="sidemenu"]');
        const allSidemenuContentList = document.querySelectorAll('[id^="sideMenuList"]');
        allSidemenuContent.forEach(content => {
            content.style.display = 'none';
        });
        allSidemenuContentList.forEach(contentList => {
            contentList.classList.remove('active');
        });


        const selectedSidemenu = document.getElementById(`sidemenu${menuNumber}`);
        const selectedSidemenuList = document.getElementById(`sideMenuList${menuNumber}`);
        if (selectedSidemenu) {
            selectedSidemenu.style.display = 'block';
            selectedSidemenuList.classList.add('active');
        }
    }

    function sendFriendRequest(user_id) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('sendfriendrequest') }}',
            data: { user_id: user_id },
            success: function(response) {
                $("#addBtnRequest" + user_id).css('display', 'none');
                $("#pendingBtnAfterRequest" + user_id).css('display', 'block');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    function feedbackFriendRequest(feedback,feedback_id){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            type:'POST',
            url:'{{ route('feedbackFriendRequest') }}',
            data: {
                feedback_status:feedback,
                feedback_id:feedback_id
            },
            success: function(response){
                $("#rejectBtnFeedback" + feedback_id).css('display', 'none');
                $("#acceptBtnFeedback" + feedback_id).css('display', 'none');
                $("#feedback_message" + feedback_id).html(response.status);
            },
            error: function(xhr,status,error){
                console.error(xhr);
            }
        });
    }

</script>
