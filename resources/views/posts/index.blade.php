@extends('layouts.app')
@section('title','HTMA Pics')
@section('content')
@push('css')
    <link href="{{asset('f/css/linearicons.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/home/style.css') }}" rel="stylesheet">

    <div class="container">
        @foreach($posts as $post)



            <div class="row pt-1 pb-4">
                <div class="col-6 offset-3">

                    <div class="d-flex align-items-center pb-2">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->ProfileImage() }}" class="w-100 rounded-circle" style="max-width: 50px">
                        </div>
                        <div>
                            <a class="font-weight-bold text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                             <a class="pl-9">on {{ $post->created_at->diffForHumans()}}</a>
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
                     <a class="pl-8">{{ $post->favorite_to_users->count() }}</a>
                    @guest
                             <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                  closeButton: true,
                                   progressBar: true,
                              })"><span class="lnr lnr-star"></span>{{ $post->favorite_to_users->count() }}</a>
                              @else
                            <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                             class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><span class="lnr lnr-star"></span>

                         <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                                 @csrf
                             </form>
                         @endguest
                        
                    <a class="pl-8">{{$post->comments->count()}} <img src="/svg/bubble.svg"></a>
                    <hr>
                </div>
            </div>

            <div class="row pb-4">
                <div class="col-6 offset-3">
                    <p>
             <span>
             <a class="font-weight-bold text-dark pr-2" href="/profile/{{ $post->user->id }}">
             <span class="text-dark">{{ $post->user->username }}
             </span>
             </a>
               <form action="{{route('post.report',$post)}}" method="post">
                        @csrf
                        <input type="text" name="details" >
                        <button type="submit" class="btn btn-danger btn-round">Send Report</button>
                    </form>
             </span>{{ $post->caption }}
                    </p>
                </div>
            </div>


        @endforeach
    </div>
@endsection
