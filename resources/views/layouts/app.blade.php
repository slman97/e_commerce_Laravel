<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>	
        <link rel="shortcut icon" type="image/x-icon" href=" {{asset('asset/images/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/chosen.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/color-01.css')}}">
        <link href=" {{ asset('assets/addchat/css/addchat.min.css')}}" rel="stylesheet">
        <title>@yield('title')</title>
        <link rel="icon" href="/svg/12.svg/"/>
        <!-- Styles -->
        <livewire:styles>
            @laravelPWA
    </head>
<body>
    <!-- 2. AddChat widget -->

<div id="app">
    <header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="{{__('Hotline: (+999) 999 999')}}" href="#" ><span class="icon label-before fa fa-mobile"></span>{{__('Hotline: (+999) 999 999')}}</a>
								</li>
							</ul>
						</div>
                        
						<div class="topbar-menu right-menu">
							<ul>
                                @guest
								<li class="menu-item" ><a title="{{__('Login')}}" href="{{ route('login') }}">{{__('Login')}}</a></li>
                                @if (Route::has('register'))
								<li class="menu-item" ><a title="{{__('register')}}" href="{{ route('register') }}">{{__('Register')}}</a></li>
                                @endif
                                @else
                                <li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">{{Auth::user()->profile->title }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="profile" href="/{{ LaravelLocalization::getCurrentLocale() }}/profile/{{ Auth::user()->id }}">{{__('profile')}}</a>
										</li>
                                        <li class="menu-item" >
											<a title="message" href="/{{ LaravelLocalization::getCurrentLocale() }}/massege/{{ Auth::user()->id }}">{{__('massege')}}</a>
										</li>
                                        @if (Auth::user()->usertype == 'admin')
										<li class="menu-item" >
											<a title="Euro (EUR)" href="/dashboard">dashboard</a>
										</li>
                                        @endif
                                        @can('update',Auth::user()->profile)
										<li class="menu-item" >
											<a title="Edit profile" href="/{{ LaravelLocalization::getCurrentLocale() }}/profile/{{Auth::user()->id}}/edit">{{__('Edit profile')}}</a>
										</li>
                                        @endcan
                                        <li class="menu-item" >
											<a title="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{__('logout')}} </a>
										</li>
									</ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
                                @endif
                                <li class="menu-item lang-menu menu-item-has-children parent">
                                   
									<a title="{{ LaravelLocalization::getCurrentLocaleName() }}" ><span class="img label-before"></span>{{ LaravelLocalization::getCurrentLocaleName() }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
									@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
										<li class="menu-item" >
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                         </a>
                                        </li>
				                 	 @endforeach</ul>
                                
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Pound (SYP)">Pound (SYP)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/{{ LaravelLocalization::getCurrentLocale() }}/" class="link-to-home"><img src="{{asset('f\img\1.jpeg')}}" alt="SSA Developer"></a>
						</div>

						<div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form method="GET" action="{{route('search')}}" type="text" name="query" id="query"
                                class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none "
                                placeholder="Search" >
                                    <input class="search" type="text" name="search" id="search" value="{{ request()->input('query') }}" placeholder="{{__('Search here..')}}.">
                                    
                                </form>
                            </div>
						</div>
                        @guest
                        @if (Route::has('register'))
                        @endif
                                @else
						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="/{{ LaravelLocalization::getCurrentLocale() }}/wishlist/{{ Auth::user()->id }}" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">{{$wishlistcount}} {{__('item')}}</span>
										<span class="title">{{__('Wishlist')}}</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="/{{ LaravelLocalization::getCurrentLocale() }}/cart/{{ Auth::user()->id }}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">

										<span class="index">{{$cartsCount}} {{__('items')}}</span>
										<span class="title">{{__('CART')}}</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
                       @endif
					</div>
				</div>

				<div class="nav-section header-sticky">
					

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/{{ LaravelLocalization::getCurrentLocale() }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/{{ LaravelLocalization::getCurrentLocale() }}" class="link-term mercado-item-title">{{__('About Us')}}</a>
								</li>
                                @guest
                                @if (Route::has('register'))
                                @endif
                                @else
                                
								<li class="menu-item">
									<a href="/{{ LaravelLocalization::getCurrentLocale() }}" class="link-term mercado-item-title">{{__('Shop')}}</a>
								</li>
								<li class="menu-item">
									<a href="/{{ LaravelLocalization::getCurrentLocale() }}/cart/{{ Auth::user()->id }}" class="link-term mercado-item-title">{{__('Cart')}}</a>
								</li>
								<li class="menu-item">
									<a href="/{{ LaravelLocalization::getCurrentLocale() }}/contactus" class="link-term mercado-item-title">{{__('Contact Us')}}</a>
								</li>
                                @endif																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>


    
</div>

<footer id="footer">
    <div class="wrap-footer-content footer-style-1">

        <div class="wrap-function-info">
            <div class="container">
                <ul>
                   
                    <li class="fc-info-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{__('Guarantee')}}</h4>
                            <p class="fc-desc">{{__('30 Days Money Back')}}</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{__('Safe Payment')}}</h4>
                            <p class="fc-desc">{{__('Safe your online payment')}}</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{__('Online Suport')}}</h4>
                            <p class="fc-desc">{{__('We Have Support 24/7')}}</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!--End function info-->

        <div class="main-footer-content">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('Contact Details')}}</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">{{__('tartos')}}</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">(+963) 963 963 - (+963) 963 963</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">Contact@yourcompany.com</p>
                                        </li>											
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('Hot Line')}}</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    <span class="desc">{{__('Call Us toll Free')}}</span>
                                    <b class="phone-number">(+963) 963 963 - (+963) 963 963</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">{{__('My Account')}}</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('My Account')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Brands')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Gift Certificates')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Affiliates')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Wish list')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">{{__('Infomation')}}</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Contact Us')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Returns')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Site Map')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Specials')}}</a></li>
                                            <li class="menu-item"><a href="#" class="link-term">{{__('Order History')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('We Using Safe Payments:')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item wrap-gallery">
                                    <img src="/category/payment.png" style="max-width: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('Social network')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('Dowload App')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item apps-list">
                                    <ul>
                                        <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="/category/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
                                        <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="/category/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="wrap-back-link">
                <div class="container">
                    <div class="back-link-box">
                        <h3 class="backlink-title">{{__('Category ')}}</h3>
                        <div class="back-link-row">
                            <ul class="list-back-link" >
                                <li><span class="row-title">All Category:</span></li>
								
                            </ul>

                        </div>
                        <h3 class="backlink-title">{{__('Languages')}}</h3>
                        <div class="back-link-row">
                              <ul class="list-back-link" >
                                <li><span class="row-title">{{ LaravelLocalization::getCurrentLocaleName() }}</span></li>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
										<li>
                                            <a  class="redirect-back-link" title="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                         </a>
                                        </li>
				                 @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="coppy-right-box">
            <div class="container">
                <div class="coppy-right-item item-left">
                    <p class="coppy-right-text">{{__('Copyright © 2020 slmanov. All rights reserved')}}</p>
                </div>
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <ul>
                            <li class="menu-item"><a href="{{route('About') }}" class="link-term">{{__('About us')}}</a></li>								
                            <li class="menu-item"><a href="{{route('Privacy') }}" class="link-term">{{__('Privacy Policy')}}</a></li>
                            <li class="menu-item"><a href="{{route('terms') }}" class="link-term">{{__('Terms & Conditions')}}</a></li>
                            <li class="menu-item"><a href="{{route('Return') }}" class="link-term">{{__('Return Policy')}}</a></li>								
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('asset/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('asset/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('asset/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
<script src="{{asset('asset/js/functions.js')}}"></script>
 <livewire:scripts>
     <!-- 3. AddChat JS -->
<!-- Modern browsers -->
<script type="module" src=" {{ asset('assets/addchat/js/addchat.min.js')}}"></script>
<!-- Fallback support for Older browsers -->
<script nomodule src="  {{ asset('assets/addchat/js/addchat-legacy.min.js')}} "></script>
</body>
</html>
