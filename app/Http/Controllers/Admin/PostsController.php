<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PostReport;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showReports()
    {
        $items=PostReport::with('user')-> with('post')->latest()->get();

        return view('admin.posts.reports')
            ->with('reports',$items)
            ;
    }
}
