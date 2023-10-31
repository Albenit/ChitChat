<?php

namespace App\Http\Controllers;

use App\Models\Friendship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FriendShipController extends Controller
{
    public function index(){
        $auth_id = Auth::user()->id;

        $friends = Friendship::where(function($query) use ($auth_id){
                $query->where('sender_id',$auth_id)->orWhere('recipient_id',$auth_id);
            })->where('status','accepted')->get();

        $requestfriendsList = User::where('id','<>',$auth_id)->get();

        return view('friendship',compact('friends','requestfriendsList'));
    }

    public function sendFriendRequest(Request $req){
        $existFriendship = Friendship::where(function($query) use ($req){
            $query->where('sender_id',Auth::user()->id)->where('recipient_id',$req->user_id);
        })->orWhere(function($query) use ($req){
            $query->where('sender_id',$req->user_id)->where('recipient_id',Auth::user()->id);
        })->first();

        if($existFriendship){
            return response()->json(['message' => 'Friendship already exists'], 200);
        }

        Friendship::create([
            'sender_id'=>Auth::user()->id,
            'recipient_id' => $req->user_id,
            'status' => 'pending'
        ]);
        return response()->json(['message' => 'Friend request sent successfully'], 200);
    }

    public function feedbackFriendRequest(Request $req){
        if($req->feedback_status == 'reject'){
            Friendship::where('id',$req->feedback_id)->delete();
            return response()->json(['message' => 'Friend response successfully rejected', 'status' => 'Rejected'], 200);
        }elseif($req->feedback_status == 'accept'){
            Friendship::where('id',$req->feedback_id)->update([
                'status' => 'accepted'
            ]);
            return response()->json(['message' => 'Friend response successfully accepted', 'status' => 'Accepted'], 200);
        }
    }
}
