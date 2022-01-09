<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servicecategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
   public function index()
   {
       $services=Servicecategory::all();
       return view('admin.services.index')
           ->with('services',$services)
           ;
   }
   public function create()
   {
       return view('admin.services.create');
   }
   public function store(Request $request)
   {
       $category=new Servicecategory();
       $category->service_name=$request->input('service_name');
       $category->service_description=$request->input('service_description');
       $category->save();

       Session::flash('statuscode','success');
       return redirect('/service-category')->with('status','Category Added Successfully');
   }
}
