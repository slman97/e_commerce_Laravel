@extends('layouts.app')
@section('title','Register')
@section('content')
<main id="main" class="main-site left-sidebar">

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><span>{{__('Register')}}</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form class="form-stl" action="{{ route('register') }}" name="register" method="post" >
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{__('Create an account')}}</h3>
                                    <h4 class="form-subtitle">{{__('Personal infomation')}}</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="name">{{__('Name')}}*</label>
                                    <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus id="frm-reg-lname"  placeholder="{{__('Name')}}*">
                                 @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="username">{{__('Username')}}*</label>
                                    <input type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus id="frm-reg-lname"  placeholder="{{__('Username')}}*">
                                 @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="email">{{__('Email Address')}}*</label>
                                    <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="frm-reg-lname"  placeholder="{{__('Email')}}*">
                                 @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </fieldset>
                               
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{__('Login Information')}}</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">{{__('Password')}} *</label>
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="{{__('Password')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="password-confirm">{{__('Confirm Password')}} *</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="{{__('Register')}}" name="register">
                            </form>
                        </div>											
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>                            
@endsection
