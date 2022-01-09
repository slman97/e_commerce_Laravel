<?php

namespace App\Http\Controllers;
use App\Post;
use App\PostReport;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Auth;

class PostsController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

public function index()
{   
    $categoryes =  DB::table('Categories')->get();
    $cartsCount =  Auth::user()->carts->count();
    $wishlistcount = Auth::user()->wishlists->count(); 
    $users=auth()->user()->following()->pluck('profiles.user_id');
    $posts=Post::whereIn('user_id', $users)->with('user')->latest()->paginate(4);
        return view('posts.index',compact('categoryes','cartsCount','wishlistcount','posts'));
}


    public function create()
    {
      $categoryes =  DB::table('Categories')->get();
      $categoryes =  DB::table('Categories')->get();
      $cartsCount =  Auth::user()->carts->count();
      $wishlistcount = Auth::user()->wishlists->count();
      return view('posts.create',compact('categoryes','cartsCount','wishlistcount','categoryes'));
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'price' => 'required',
            'day' => 'required',
            'full_discription' => 'required',
            'short_discription' => 'required',
            'category_id' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);


        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'price' => $data['price'],
            'day' => $data['day'],
            'full_discription' => $data['full_discription'],
            'short_discription' => $data['short_discription'],
            'category_id' => $data['category_id'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
    
    public function reportPost ($post, Request $request)
    {

        $data = request()->validate([
            'details' => 'required',

        ]);
        $user_id = Auth::user()->id;
       PostReport::create([
           "user_id"=>$user_id,
           "post_id"=>$post,
           "details"=>$request->details
       ]);

        return redirect('/');
    }
public function edit(\App\Post $post, Request $request, $id)
    {
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count();
        $post=Post::find($id);
        $categoryes =  DB::table('Categories')->get();
        return view('posts.edit',compact('categoryes','post','cartsCount','wishlistcount'));
    }


    public function update(Request $request, $id)
    {
        $this->authorize('update', $user->post);
        $post = Post::find($id);
        $data = request()->validate([
            'caption' => 'required',
            'image' => '',
        ]);
        $post->update(array_merge(
            $data,

        ));

        return redirect('/profile/' . auth()->user()->id);
    }


    public  function  show(\App\Post $post)
    {
        $postByCatogorys = DB::table('posts')->where('category_id', $post->category_id)->get();
        $commentsCount = $post->comments->count();
        $totalRating = $post->comments->sum('rating');
        if($commentsCount > 0) 
        {
            $ratingAvg =intval($totalRating / $commentsCount)  ;
        }
        else
        {
            $ratingAvg = 0 ;
        }
        $categoryes =  DB::table('Categories')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count();   
        return view('posts.show',compact('categoryes','post','wishlistcount','cartsCount','ratingAvg','commentsCount','postByCatogorys'));
    }
    public  function  shop(\App\Post $post, $category_id ,\App\User $user)
    {
        $postByCatogorys = DB::table('posts')->where('category_id', $category_id)->get();
        $categoryes =  DB::table('Categories')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count();
        
        return view('posts.shop',compact('user','category_id','categoryes','post','wishlistcount','cartsCount','postByCatogorys'));
    }

    public function destroy($id){

        $post = post::find($id);
        $post->delete();
        return redirect('/profile/' . auth()->user()->id);
    }
    public function search(Request $request)
    {
        $categoryes =  DB::table('Categories')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count();
        $query = $request->input('search');
        
        $posts = post::where('caption', 'like', "%$query%")->get();
        return view('search.search-results',compact('cartsCount','wishlistcount','categoryes'))->with('posts', $posts);
    }

}
