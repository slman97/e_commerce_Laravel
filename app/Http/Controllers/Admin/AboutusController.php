<?php

namespace App\Http\Controllers\Admin;
use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
  public function index()
  {
      $aboutus=Abouts::all();
     return view('admin.aboutus')
         ->with('aboutus',$aboutus)
         ;
  }
  public function store(Request $request)
  {

      $aboutus=new Abouts;

      $aboutus->title=$request->input('title');
      $aboutus->subtitle=$request-> input('subtitle');
      $aboutus->description=$request->input('description');

      $aboutus ->save();

      return redirect('/abouts')->with('status','Data Added for About Us');
  }

  public function edit($id)
  {
       $aboutus =Abouts::findOrFail($id);
   return view('admin.abouts.edit')->with('aboutus',$aboutus);
  }
public function update(Request $request,$id)
{
    $aboutus =Abouts::findOrFail($id);
    $aboutus->title=$request->input('title');
    $aboutus->subtitle=$request->input('subtitle');
    $aboutus->description=$request->input('description');
    $aboutus->update();

    return redirect('abouts')->with('status','Data Update for About Us');
}
public function delete($id)
{
    $aboutus=Abouts::findOrFail($id);
    $aboutus->delete();
    return redirect('abouts')->with('status','Data Delete for About Us');
}
}
