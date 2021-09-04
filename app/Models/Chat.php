<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';

    //protected $guarded = [];

    protected $fillable = [
        'message',
        'sender_id',
        'reciever_id',
    ];
}
