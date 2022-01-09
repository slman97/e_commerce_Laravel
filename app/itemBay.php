<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemBay extends Model
{
    protected $guarded = [];
    public function cart()
    {
        return $this->belongsTo(Cart::Class);
    }
    protected $fillable =
        [
            'post_id','cart_id',
        ];
    public function post()
    {
        return $this->belongsTo(Post::Class);
    }
}
