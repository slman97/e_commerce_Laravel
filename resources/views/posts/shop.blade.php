@extends('layouts.app')

@section('content')

<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>#}</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">

              

                <div class="wrap-shop-control">

                    <h1 class="shop-title"></h1>

                    

                </div><!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">
                     @foreach ($postByCatogorys as $postByCatogory)
                         <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $postByCatogory->id }}" title="{{$postByCatogory->caption}}">
                                        <figure><img src="/storage/{{$postByCatogory->image}}" alt="{{$postByCatogory->caption}}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $postByCatogory->id }}" class="product-name"><span>{{$postByCatogory->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$postByCatogory->price}}</span></div>
                                    @can('update',$user->profile)
                                    <a href="{{ route('posts.edit', $postByCatogory->id)}}" class="btn add-to-cart">{{__('Edite')}}</a>
                                    @endcan
                                    @cannot('update',$user->profile)
                                    <form action="/cart/{{ $postByCatogory->id }}/store" method="POST">
                                       {{ csrf_field() }}
                                       <p class="form-submit">
                                           <input name="submit" class="btn add-to-cart" type="submit" id="submit" class="submit" value="Add to cart">
                                       </p>
                                   </form>
                                   <form action="/wishlist/{{ $postByCatogory->id }}/store" method="POST">
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

                <div class="wrap-pagination-info">
                    
                    <p class="result-count">Showing 1-
                        @if ($postByCatogorys->count() > 8 )
                        8    
                        @else   
                        {{$postByCatogorys->count()}}
                        @endif
                        of {{$postByCatogorys->count()}} result</p>
                </div>
            </div><!--end main products area-->

            
        </div><!--end row-->

    </div><!--end container-->

</main>

@endsection