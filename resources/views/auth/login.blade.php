@extends('layouts.app')
@section('title','login')
@section('content')
    <div class="container">
        <main id="main" class="main-site left-sidebar">
            <div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><span>{{__('login')}}</span></li>
				</ul>
			</div>
            <div class="container">
    
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                        <div class=" main-content-area">
                            <div class="wrap-login-item ">						
                                <div class="login-form form-item form-stl">
                                    <form action="{{ route('login') }}" method="POST" name="frm-login">
                                        @csrf
                                        <fieldset class="wrap-title">
                                            <h3 class="form-title">{{__('Log in to your account')}}</h3>										
                                        </fieldset>
                                        <fieldset class="wrap-input">
                                            <label for="email">{{ __('Login') }} </label>
                                            <input type="email" id="email" required autocomplete="email" autofocus value="{{ old('email') }}" class="@error('email') is-invalid @enderror" name="email" placeholder="{{__('Type your email address')}}">
                                          @error('email')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                        </fieldset>
                                        <fieldset class="wrap-input">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" id="password" autofocus value="{{ old('password') }}" class="@error('password') is-invalid @enderror" name="password" placeholder="************">
                                          @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                        </fieldset>
                                       
                                        <fieldset class="wrap-input">
                                            <label for="remember" class="remember-field">
                                                <input class="frm-input " name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} value="forever" type="checkbox"><span>{{__('Remember me')}}</span>
                                            </label>
                                            @if (Route::has('password.request'))
                                            <a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                             @endif
                                           
                                        </fieldset>
                                        <input type="submit"  class="btn btn-submit" value="{{__('Login')}}" name="submit">
                                    </form>
                                </div>												
                            </div>
                        </div><!--end main products area-->		
                    </div>
                </div><!--end row-->
    
            </div><!--end container-->
    
        </main>
@endsection