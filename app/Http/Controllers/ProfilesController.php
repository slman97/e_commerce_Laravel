<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $categoryes =  DB::table('Categories')->get();
        $cartsCount = Auth::user()->carts->count(); 
        $wishlistcount = Auth::user()->wishlists->count(); 
        $follows = (auth()->user())? auth()->user()->following->contains($user->id):false;
        $postCount = Cache::remember(
            'count.posts.' .$user->id,
            now()->addSeconds(30) ,
            function () use ($user){
                return $user->posts->count();
            });
        $followersCount = Cache::remember(
            'count.follower.' .$user->id,
            now()->addSeconds(30) ,
            function () use ($user) {
                return $user->profile->followers->count();
            });
        $followingCount = Cache::remember(
            'count.following.' .$user->id,
            now()->addSeconds(30) ,
            function () use ($user) {
                return $user->following->count();
            });
        return view('profiles.index', compact('categoryes','user','follows','postCount','followersCount','wishlistcount','followingCount','cartsCount'));
    }


    public function edit(User $user)
    
    {    $this->authorize('update', $user->profile);
        $categoryes =  DB::table('Categories')->get();
        $cartsCount =  Auth::user()->carts->count();
        $wishlistcount = Auth::user()->wishlists->count(); 
        return view('profiles.edit',compact('categoryes','user','cartsCount','wishlistcount'));
    }
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'required',
        ]);

        if (request('image')) {
            $imagePath=request('image')->store('profile','public');
            $image=Image::make(public_path("storage/{$imagePath}"))->resize(1000,1000);
            $image->save();
            $imageArray=['image'=>$imagePath ];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ??[]


        ));
        return redirect("/profile/{$user->id}");
    }
    public function ammountupdate (user $user){
        $this->authorize('update', $user->profile);
        $data = request()->validate([ 'ammountnew' => 'required', ]);
        auth()->user()->profile->update(array_merge($data));
        return redirect("/cart/{$user->id}");
    }
}
