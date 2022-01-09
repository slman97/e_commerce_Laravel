@extends('layouts.app')
@section('title','Edit profile')
@section('content')
<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/{{ LaravelLocalization::getCurrentLocale() }}" class="link">{{__('home')}}</a></li>
            <li class="item-link"><span>{{__('Add New Service')}}</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="register-form form-item ">                
                   <form action="/profile/{{ $user->id }}" class="form-stl" name="frm-login" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <fieldset class="wrap-title">
            <h3 class="form-title">{{__('Edit profile')}}</h3>
            <h4 class="form-subtitle">{{__('profile Information')}}</h4>
        </fieldset>	
        <fieldset class="wrap-input">
            <label for="title">{{__('title')}}</label>
            <input id="title"id="frm-reg-lname" placeholder="{{__('title')}}*" type="text"
             class=" @error('title') is-invalid @enderror" name="title"
          value="{{ old('title') }}" autocomplete="title" autofocus>

             @error('title')
          <span class="invalid-feedback" role="alert">
           <strong style="color : red">{{ $message }}</strong>
          </span>
             @enderror
            
        </fieldset>
        <fieldset class="wrap-input">
            <label for="description">{{__(' description')}}</label>
            <input id="description"id="frm-reg-lname" placeholder="{{__('Service description')}}*" type="text"
             class=" @error('description') is-invalid @enderror" name="description"
          value="{{ old('description') }}" autocomplete="description" autofocus>

             @error('description')
          <span class="invalid-feedback" role="alert">
           <strong style="color : red">{{ $message }}</strong>
          </span>
             @enderror
            
        </fieldset>
        <fieldset class="wrap-input">
            <label for="url">{{__(' url')}}</label>
            <input id="url"id="frm-reg-lname" placeholder="{{__('Service url')}}*" type="text"
             class=" @error('url') is-invalid @enderror" name="url"
          value="{{ old('url') }}" autocomplete="url" autofocus>

             @error('url')
          <span class="invalid-feedback" role="alert">
           <strong style="color : red">{{ $message }}</strong>
          </span>
             @enderror
            
        </fieldset>
               
        <fieldset class="wrap-title">
            <h3 class="form-title">{{__('Image')}}</h3>
        </fieldset>
        <div class="row">
                                
            <input type="file" class="btn btn-sign" id="image" name="image">
            @error('image')
           <strong style="color : red">{{ $message }}</strong>
            @enderror
             </div>
                <div class="row pt-4">
                    
                    <button class="btn btn-sign"> {{__('Save profile')}} </button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
