<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Cart;
use App\Post;
use App\itemBay;
use Illuminate\Http\Request;

class itemBayController extends Controller
{
    public function store($post)
    {
        itembay::create([
        'post_id' => $post,
        'cart_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
}
