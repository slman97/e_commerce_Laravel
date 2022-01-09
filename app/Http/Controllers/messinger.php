<?php

namespace App\Http\Controllers;
use App\User;
use App\profile;
use Illuminate\Http\Request;

class messinger extends Controller
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
     * @return \Illuminate\Http\Response
     */

    public function index(User $user)
    {
        return view('messinger/messinger', compact('user'));
    }
    public function Create()
    {

    }
    public function store()
    {
        $data = request()->validate([
            'text' => 'required',
        ]);
        auth()->user()->messinger()->create([
            'text' => $data['text'],
        ]);
        return redirect('/profile/' . auth()->user()->id);
    }

}
