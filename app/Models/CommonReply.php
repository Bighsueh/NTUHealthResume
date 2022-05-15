<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class CommonReply extends Model
{
    protected $table = 'common_reply';
    protected $fillable =
        [
            'reply_id',
            'reply_content',
        ];

}
