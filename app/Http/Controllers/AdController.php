<?php

namespace App\Http\Controllers;
use App\Ad;
use Auth;
use App\User;
use App\Post;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function create(){
        return view('ad.create');
    }
        public function store(Request $request,$post)
    {
        Ad::create([
        'adtype' => 'unaccept',
        'ad_day' => request('ad_day'),
        'ad_price' => request('ad_price'),
        'post_id' => $post,
        'user_id' => Auth::id(),

        ]);
        return redirect()->back();
    }
}

