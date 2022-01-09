<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Ad;
use Illuminate\Http\Request;
use \DB;

class DashboardController extends Controller
{
   public function registered()
{
    $users =User::all();
    return view('admin.register')->with('users',$users);
}

    public function registere()
    {

        $posts = \DB::table('posts')->get();

        return view('admin.registe', ['posts' => $posts]);
    }


public function  registeredit(Request $request,$id)
{
    $users=User::findOrFail($id);
    return view('admin.register-edit')->with('users',$users);
}
public function registerupdate(Request $request,$id){
       $users = User::find($id);
       $users->name=$request->input('username');
       $users->usertype=$request->input('usertype');
       if(!empty($request->input("end_date")))
       $users->admin_until=$request->input('end_date');
       $users->update();

       return redirect('/role-register')->with('status','User Updated Successful');

}
public function registerdelete($id){
       $users =User::findOrFail($id);
       $users->delete();

    return redirect('/role-register')->with('error','User Has been deleted');

}
    public function registerdel($id){

        DB::table('posts')->where('id', '=', $id)->delete();

        return redirect('/role-registe')->with('status','Your Date is Updated');


    }
    public function adupdate (Request $request ,$id){
        $ads = Ad :: find($id);
        return view('admin.ad-update',compact('ads'));
    }
    public function adupdat(Request $request ,$id){ 
        $ads = Ad :: find($id);
        
        $ads->adtype = $request->input($ads->adtype);
        $ads->update();
    }
    public function messagereply (Request $request ,$id){
        
        return view('admin.messagereply',compact('id'));
    }
    public function messagerepl(Request $request ,$id){ 
        $data = request()->validate([
            'support' => 'required',
        ]);
        auth()->user()->contacts()->create([
            'support' => $data['support']
        ]);
        return redirect('/profile/' . auth()->user()->id);
    }
 }
