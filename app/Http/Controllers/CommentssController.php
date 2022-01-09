<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentssController extends Controller
{
    
    public function store(Request $request,$post)
    {
        Comment::create([
        'body' => request('body'),
        'rating' => request('rating'),
        'post_id' => $post,
        'user_id' => Auth::id(),

        ]);
        return redirect()->back();
    }
    public function edit(\App\Post $comment, Request $request, $id)
    {
        $comment=Comment::find($id);
        return view('comment.edit',compact('comment'));
    }
    public function update(Request $request, $id)
    {

        $comment = comment::find($id);
        $data = request()->validate([
            'body' => 'required',
            'rating' => 'required',
        ]);
        $comment->update(array_merge(
            $data
        ));

        return redirect('/profile/' . auth()->user()->id);
    }

   public function destroy($id){
        Comment::find($id)->delete();
        return redirect()->back()->withErrors('Successfully deleted!');
    }
}
