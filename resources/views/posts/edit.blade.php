@extends('layouts.app')
@section('title','Edit Post')
@section('content')
<div class="container">
<form action="{{ route('posts.update', $post->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')
    <div >
        <div class="col-8 offset-2">
            <div class="row">
                <h1>{{__('Edit Post')}}</h1>
            </div>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label ">{{__('Change Post Caption')}}</label>
                <input id="caption" type="text"
                       class="form-control @error('caption') is-invalid @enderror" name="caption"
                       value="{{ $post->caption }}" autocomplete="caption" autofocus>

                @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>
            </div>
            <div class="row pt-4 ml-50 text-md-center">
                <button class="btn btn-primary"> {{__('Update Post')}} </button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
