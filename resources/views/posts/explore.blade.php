@extends('layouts.app')
@section('title','Explore')
@section('content')
    <div class="container">
        @foreach($postss as $post)

            <div class="row pt-1 pb-4">
                <div class="col-6 offset-3">

                    <div class="d-flex align-items-center pb-2">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->ProfileImage() }}" class="w-100 rounded-circle" style="max-width: 50px">
                        </div>
                        <div>
                            <a class="font-weight-bold text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            <hr/>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-1 pb-4">
                <div class="col-6 offset-3">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>

            <div class="row pt-1 pb-4">
                <div class="col-6 offset-3">

                </div>
            </div>

            <div class="row pt-1 pb-4">
                <div class="col-6 offset-3">

                    <p>
             <span>
             <a class="font-weight-bold text-dark pr-2" href="/profile/{{ $post->user->id }}">
             <span class="text-dark">{{ $post->user->username }}
             </span>
             </a>
             </span>{{ $post->caption }}
                    </p>
                </div>
            </div>


        @endforeach


    </div>
@endsection
