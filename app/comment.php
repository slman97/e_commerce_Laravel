<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    protected $guarded = [];
       
    public function user()

    {
        return $this->belongsTo(User::class);
    }

    protected $fillable =
        [
            'body', 'post_id','user_id','rating'
        ];

    public function post()

    {
        return $this->belongsTo(Post::class);
    }

}
