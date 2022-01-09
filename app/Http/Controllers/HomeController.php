<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $psot)
    {
        $ads = DB :: table('ads')->where('adtype','like','accept')->get();
        if($ads->count() > 0){
           foreach ($ads as $ad) { 
            $postads = DB :: table('posts')->where('id','like',"%$ad->post_id%")->get();
        } 
        } else {
            $postads =  DB::table('posts')->get();
        }
        
        $posts = DB::table('posts')->get();
        $prs = DB::table('posts')->where('category_id','1')->get();
        $ems = DB::table('posts')->where('category_id','2')->get();
        $rts = DB::table('posts')->where('category_id','3')->get();
        $dvs = DB::table('posts')->where('category_id','4')->get();
        $des = DB::table('posts')->where('category_id','5')->get();
        $aus = DB::table('posts')->where('category_id','6')->get();
        $wrs = DB::table('posts')->where('category_id','7')->get();
        $bus = DB::table('posts')->where('category_id','8')->get();
        $postByCatogorys = DB::table('posts')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount =  Auth::user()->wishlists->count();
        $categoryes =  DB::table('Categories')->get();
        return view('home',compact('postads','posts','wishlistcount','cartsCount','categoryes','postByCatogorys','prs','ems','rts','dvs','des','bus','aus','wrs'));
    }
    public function term(){
        $postByCatogorys = DB::table('posts')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount =  Auth::user()->wishlists->count();
        $categoryes =  DB::table('Categories')->get();
        
        return view('terms-conditions',compact('wishlistcount','cartsCount','categoryes','postByCatogorys'));
    }
    public function Return(){
        $postByCatogorys = DB::table('posts')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount =  Auth::user()->wishlists->count();
        $categoryes =  DB::table('Categories')->get();
        
        return view('return_poliocy',compact('wishlistcount','cartsCount','categoryes','postByCatogorys'));
    }
    public function Privacy(){
        $postByCatogorys = DB::table('posts')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount =  Auth::user()->wishlists->count();
        $categoryes =  DB::table('Categories')->get();
        
        return view('Privacy',compact('wishlistcount','cartsCount','categoryes','postByCatogorys'));
    }
    public function About(){
        $postByCatogorys = DB::table('posts')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount =  Auth::user()->wishlists->count();
        $categoryes =  DB::table('Categories')->get();
        
        return view('About',compact('wishlistcount','cartsCount','categoryes','postByCatogorys'));
    }

}
