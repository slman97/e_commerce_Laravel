<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $guarded = [];

    public function user()

    {
        return $this->belongsTo(User::class);
    }

    protected $fillable =
        [
         'ad_day','ad_price','price', 'caption', 'image', 'adtype', 'post_id','user_id',
        ];

    public function post()

    {
        return $this->belongsTo(Post::class);
    }
}
