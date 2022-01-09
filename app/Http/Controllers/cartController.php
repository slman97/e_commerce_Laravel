<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\Cart;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class cartController extends Controller
{
    public function index(User $user) {
        $posts = DB::table('posts')->get();
        $categoryes =  DB::table('Categories')->get();
        $totalprice = $user->carts()->with(['post'])->get()
        ->reduce(function($carry, $cart) {
            return $carry + floatval($cart->post->price);
        }, 0);
        $wishlistcount = $user->wishlists->count(); 
       $cartsCount = $user->carts->count(); 
       $ammountnew = Auth::user()->profile->ammount - $totalprice;
        return view('cart.cart',compact('posts','categoryes','user','totalprice','cartsCount','wishlistcount','ammountnew'));
    }
    public function store($post)
    {
        cart::create([
        'post_id' => $post,
        'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
    public function destroy($id){

        $cart = cart::find($id);
        $cart->delete();
        return redirect('/cart/' . auth()->user()->id);
    }
    public function pay(User $user){
        $categoryes =  DB::table('Categories')->get();
        $wishlistcount = $user->wishlists->count(); 
       $cartsCount = $user->carts->count(); 
        $totalprice = $user->carts()->with(['post'])->get()
        ->reduce(function($carry, $cart) {
            return $carry + floatval($cart->post->price);
        }, 0);
        return view('cart.payment',compact('user','totalprice','cartsCount','wishlistcount','categoryes'));
    }
    public function ok (User $user){
        $categoryes =  DB::table('Categories')->get();
        $wishlistcount = $user->wishlists->count(); 
       $cartsCount = $user->carts->count(); 
        $totalprice = $user->carts()->with(['post'])->get()
        ->reduce(function($carry, $cart) {
            return $carry + floatval($cart->post->price);
        }, 0);
        return view('cart.ok',compact('user','totalprice','cartsCount','wishlistcount','categoryes'));
      
    }
}
