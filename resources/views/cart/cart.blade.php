@extends('layouts.app')
@section('title', 'cart' )
@section('content')
<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">{{__('home')}}</a></li>
                <li class="item-link"><span>{{__("CART")}}</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-iten-in-cart">
                <h3 class="box-title">{{__("PRODUCTS NAME")}}</h3>
                <ul class="products-cart">
                   
                    <a></a>
                    @guest
                     @if ($user->carts->count()== 0)
                     <li class="pr-cart-item">
                      <a> cartis empti </a>
                     </li>
                     @endif
                     @else
                     @foreach($user->carts as $cart)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="/storage/{{$cart->post->image }}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{$cart->post->caption}}</a>
                        </div>
                        <div class="price-field sub-total"><p class="price">{{$cart->post->price}}$</p></div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="">
                                <span>Delete from your cart</span>
                                
                            </a>
                            <form action ="{{ route('carts.destroy', $cart->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <input  type="submit" name="submit" value="delate" class="btn btn-wishlist">
                            </form>
                        </div>
                    </li>
                   	@endforeach	
                     @endif							
                </ul>
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">{{__("ORDER SUMMARY")}}</h4>
   
                    <p class="summary-info"><span class="title">{{__("Subtotal")}}</span><b class="index">${{$totalprice}}</b></p>
         
                </div>
                <div class="checkout-info">
                    <a class="btn btn-checkout" href="/cart/{{$user->id}}/checkout">Check out</a>
                    <a class="link-to-shop" href="/{{ LaravelLocalization::getCurrentLocale() }}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                 
                <div class="update-clear">
                    <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                </div>
            </div>

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                        @foreach ( $posts as $post )
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{$post->id}}" title="{{$post->caption}}">
                                    <figure><img src="/storage/{{$post->image}}" width="800" height="800" alt="{{$post->caption}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{$post->id}}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{$post->id}}" class="product-name"><span>{{$post->caption}}</span></a>
                                <div class="wrap-price"><span class="product-price">${{$post->price}}</span></div>
                            </div>
                        </div>
                        @endforeach

                        
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

</main>

@endsection