@extends('layouts.app')
@section('content')
<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Cart</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                   
                    <a></a>
                     @foreach($user->wishlists as $wishlist)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="/storage/{{$wishlist->post->image }}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{$wishlist->post->caption}}</a>
                        </div>
                        <div class="price-field sub-total"><p class="price">{{$wishlist->post->price}}$</p></div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="">
                                <span>Delete from your wishlist</span>
                                
                            </a>
                            <form action ="{{ route('wishlist.destroy', $wishlist->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <input  type="submit" name="submit" value="delate" class="btn btn-wishlist">
                            </form>
                        </div>
                    </li>
                   	@endforeach								
                </ul>
            </div>

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                       
                        @foreach ( $posts as $post )
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="/p/{{$post->id}}" title="{{$post->caption}}">
                                    <figure><img src="/storage/{{$post->image}}" width="800" height="800" alt="{{$post->caption}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="/p/{{$post->id}}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="/p/{{$post->id}}" class="product-name"><span>{{$post->caption}}</span></a>
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