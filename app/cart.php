<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
    protected $fillable =
        [
            'post_id','user_id',
        ];
    public function post()
    {
        return $this->belongsTo(Post::Class);
    }
}
