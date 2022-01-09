@extends('layouts.app')
@section('title', $user->profile->title )
@section('content')
<div class="container">
   <main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">{{__('home')}}</a></li>
                <li class="item-link"><span>{{ $user->profile->title }}</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                

                <div class="row">

                    <ul class="product-list grid-products equal-container">

                        @foreach($user->posts as $post)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $post->id }}" title="{{$post->short_discription}}">
                                        <figure><img src="/storage/{{ $post->image }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $post->id }}" class="product-name"><span>{{$post->caption }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $post->price}}$</span></div>
                                     @can('update',$user->profile)
                                     <a href="{{ route('posts.edit', $post->id)}}" class="btn add-to-cart">{{__('Edite')}}</a>
                                     @endcan
                                     @cannot('update',$user->profile)
                                     <form action="/cart/{{ $post->id }}/store" method="POST">
                                        {{ csrf_field() }}
                                        <p class="form-submit">
                                            <input name="submit" class="btn add-to-cart" type="submit" id="submit" class="submit" value="Add to cart">
                                        </p>
                                    </form>
                                    <form action="/wishlist/{{ $post->id }}/store" method="POST">
                                        {{ csrf_field() }}
                                        <p class="form-submit">
                                            <input name="submit" class="btn add-to-cart" type="submit" id="submit" class="submit" value="Add to wishlist">
                                        </p>
                                    </form>
                                   
                                    @endcan
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>

            
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <a class="widget-title"><img style="border-radius: 50%;" src="{{ $user->profile->ProfileImage() }}"></a>
                    <div class="widget-content">
                        <ul class="list-category">
                            <li class="category-item has-child-cate">
                                <a style="font-size:3vw " class="cate-link">{{ $user->profile->title }}</a>
                            </li>
                            <li class="category-item has-child-cate">
                                <a class="cate-link">{{__('about me')}} : {{ $user->profile->description }}</a>
                            </li> 
                            <li class="category-item has-child-cate">
                                <a class="cate-link">{{__('my website')}} : {{ $user->profile->url }}</a>
                            </li>
                            
                            
                            @cannot('update',$user->profile)
                            <li class="category-item has-child-cate">
                              <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                            </li>
                            @endcannot
                            @can('update',$user->profile)
                             <li class="category-item has-child-cate">
                            <a href="/p/create" class=" btn add-to-cart">{{__('Add anew post')}}</a>
                             </li>
                            @endcan

                            <li class="category-item has-child-cate">
                                <a class="cate-link">{{__('posts')}} : {{ $user->posts->count() }}</a>
                            </li>
                            <li class="category-item has-child-cate">
                                <a  class="cate-link">{{__('followers')}} : {{ $user->profile->followers->count() }}</a>
                            </li>
                            <li class="category-item has-child-cate">
                                <a class="cate-link">{{__('following')}} : {{ $user->following->count() }}</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>

</div>

@endsection