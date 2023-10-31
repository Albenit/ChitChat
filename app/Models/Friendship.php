<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $table = 'friendships';

    protected $fillable = [
        'sender_id',
        'recipient_id',
        'status'
    ];

    public function senderUserName(){
        return $this->belongsTo(User::class,'sender_id','id');
    }
    public function recipientUserName(){
        return $this->belongsTo(User::class,'recipient_id','id');
    }
}
