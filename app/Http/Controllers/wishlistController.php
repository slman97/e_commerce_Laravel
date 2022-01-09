<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\Cart;
use App\Post;
use App\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wishlistController extends Controller
{
    public function index(User $user) {
      
       $Categories =  DB::table('Categories')->get();
       $cartsCount = Auth::user()->carts->count(); 
       $wishlistcount = $user->wishlists->count(); 
       $posts = DB::table('posts')->get();
       
        return view('wishlist.wishlist',compact('posts','Categories','user','cartsCount','wishlistcount'));
    }
    public function store($post)
    {
        wishlist::create([
        'post_id' => $post,
        'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
    public function destroy($id){

        $wishlist = wishlists::find($id);
        $wishlist->delete();
        return redirect('/wishlist/' . auth()->user()->id);
    }
}
