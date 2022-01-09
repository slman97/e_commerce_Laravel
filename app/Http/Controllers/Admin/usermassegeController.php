<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usermassegeController extends Controller
{
    public function usermassege(User $user)
    {
        $items = DB::table('contacts')->get();
        return view('admin.user-massege',compact('items'));
    }
    public function usercart(User $user)
    {
        $items = DB::table('carts')->get();
        return view('admin.cart',compact('items'));
    }
}
