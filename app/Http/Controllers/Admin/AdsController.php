<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ad;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function adsrequset(Post $post)
    {
        $items = DB::table('ads')->get();
        return view('admin.ad',compact('items'));
    }
}
