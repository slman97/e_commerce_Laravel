<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use DB ;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
      $cartsCount =  Auth::user()->carts->count();
      $wishlistcount = Auth::user()->wishlists->count();
      return view('contactus.contactus',compact('cartsCount','wishlistcount'));
    }

    public function store()
    {
        $data = request()->validate([
            'support' => 'required',
        ]);
        auth()->user()->contacts()->create([
            'support' => $data['support']
        ]);
        return redirect('/profile/' . auth()->user()->id);
     }
     public function show(User $user){
        $user = Auth:: user()->id;
        $masseges = DB::table('contacts')->where('user_id','like',"%$user%")->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count();
         return view('contactus.show',compact('masseges','user','cartsCount','wishlistcount'));
     }
    }
