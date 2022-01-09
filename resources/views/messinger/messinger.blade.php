@extends('layouts.app')
@section('title','messinger')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                @if ($user->id == Auth::user()->id)
                    @return <a> cant </a>
                @else
                     <a> {{ $user->username  }} </a>
                @endif
            </div>
       </div>
    </div>
    <div class="row justify-content-center">
       <form action="/m" enctype="multipart/form-data" method="post">
           <input class="form-control" type="text">
           <button class="primar-btn banner-btn"> Add New message </button>
       </form>
    </div>
 </div>

@endsection