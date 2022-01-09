<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    public function searchableAs()
    {
        return 'posts_index';
    }
    protected $guarded=[];
    public function cart()
    {
        return $this->hasOne(Cart::Class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(comment::class);
    }
    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function ad()
    {
        return $this->hasone(Ad::class);
    }
    public function wishlists()
    {
        return $this->hasMany(wishlist::class)->orderBy('created_at', 'DESC');
    }
    public function Category (){
        return $this->hasOne(Category::class);
    }
}
