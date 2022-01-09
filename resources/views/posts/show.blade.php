@extends('layouts.app')
@section('title','Post')
@section('content')
    <div class="container">
       <main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/{{ LaravelLocalization::getCurrentLocale() }}/" class="link">{{__('home')}}</a></li>
                <li class="item-link"><span>{{__('detail')}}</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                          <ul class="slides"> 
                              
                            <li data-thumb="assets/images/products/digital_18.jpg">
                                <img src="/storage/{{ $post->image }}" alt="product thumbnail" />
                            </li>
                               
                          </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <div class="star-rating">
                                <span class="width-{{$ratingAvg}}-percent"></span>
                            </div>
                            <a href="#" class="count-review">({{ $commentsCount }} {{__('review')}})</a>
                        </div>
                        <h2 class="product-name">{{$post->caption}}</h2>
                        <div class="short-desc">
                            <ul>
                                <li>{{$post->short_discription}}</li>
                            </ul>
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price">{{$post->price}}$</span></div>
                        <div class="stock-info in-stock">
                            <p class="availability">{{__('from')}}: <a href="/profile/{{ $post->user->id }}">{{$post->user->username}}</a></p>
                        </div>
                        <div class="wrap-butons">
                            @can('update',$post->user->profile)
                            <a href="{{ route('posts.edit', $post->id)}}" class="btn add-to-cart">{{__('Edite')}}</a>
                            <div class="wrap-btn">
                                <form action ="{{ route('posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input  type="submit" name="submit" value="{{__('delate post')}}" class="btn btn-wishlist">
                                </form>
                              
                            </div>
                            @endcan
                            @cannot('update',$post->user->profile)
                            <form action ="/cart/{{$post->id}}/store" method="POST">
                                @csrf
                                <input  type="submit" name="submit" value="{{__('Add To Cart')}}" class="btn btn-wishlist">
                            </form>
                           
                           @endcan
                            
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">{{__('description')}}</a>
                            @can ('update',$post)
                            <a href="#add_infomation" class="tab-control-item">{{__('import as ad')}}</a>
                            @endcan
                            <a href="#review" class="tab-control-item">{{__('Reviews')}}</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                               <P>{{$post->full_discription}}</P>
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond"> 

                                            
                                             <form action="/ad/{{ $post->id }}/store" enctype="multipart/form-data" method="post" id="commentform" class="comment-form" novalidate="">
                                                {{ csrf_field() }}
                                                @csrf
                                                 <p class="comment-form-author">
                                                    <label for="ad_day">{{__('ad day')}} <span class="required">*</span></label> 
                                                    <input id="ad_day" class=" @error('ad_day') is-invalid @enderror" autocomplete="ad_day" name="ad_day" type="text" value="">
                                                 
                                                    @error('ad_day')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                  </p>
                                                  <p class="comment-form-email">
                                                    <label for="ad_price">{{__('ad price')}} <span class="required">*</span></label> 
                                                    <input id="ad_price" name="ad_price"  value="{{ old('ad_price') }}"  class=" @error('ad_price') is-invalid @enderror" type="text" value="" >
                                                    @error('ad_price')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                             </span>
                                                            @enderror
                                                   </p>
                                                   <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                </p>
                                              </form>
                       

                                        </div><!-- .comment-respond-->
                                    </div><!-- #review_form -->
                                </div > 
                            </div>
                            <div class="tab-content-item " id="review">
                                
                                <div class="wrap-review-form">
                                    
                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">{{ $post->comments->count() }} {{__('review for')}} <span> {{ $post->caption}}</span></h2>
                                        <ol class="commentlist">
                                            @foreach ($post->comments as $comment)
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                <div id="comment-20" class="comment_container"> 
                                                    <img alt="" src="{{ $comment->user->profile->ProfileImage()}}" height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-{{$comment->rating}}-percent"></span>
                                                        </div>
                                                        
                                                        <p class="meta"> 
                                                            <strong href="/profile/{{ $comment->user->id }}" class="woocommerce-review__author">{{$comment->user->username}}</strong> 
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" > {{ $comment->created_at->diffForHumans()}}</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>{{ $comment->body }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div><!-- #comments -->
                                     
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond"> 

                                                <form action="/posts/{{ $post->id }}/store" method="post" id="commentform" class="comment-form" novalidate="">
                                                    {{ csrf_field() }}
                                                    <p class="comment-notes">
                                                        <span id="email-notes"></span> {{__('Required fields are marked')}} <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>{{__('Your rating')}}</span>
                                                        <p class="stars">
                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                        </p>
                                                    </div>
                                                    
                                                    <p class="comment-form-comment">
                                                        <label for="body">{{__('Your review')}} <span class="required">*</span>
                                                        </label>
                                                        <textarea id="body" name="body" cols="45" rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="{{__('Submit')}}">
                                                    </p>
                                                </form>

                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">
                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift!</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Return within 7 days</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>

            </div><!--end sitebar-->

 <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="wrap-show-advance-info-box style-1 box-in-site">
        <h3 class="title-box">Related Products</h3>
          
        <div class="wrap-products">
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                @foreach ($postByCatogorys as $postByCatogory)
                  @if($post->id != $postByCatogory->id )
                  <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $postByCatogory->id }}" title="{{$postByCatogory->caption}}">
                            <figure><img src="/storage/{{$postByCatogory->image}}" width="400" height="400" alt="{{$postByCatogory->caption}}"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item new-label">new</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $postByCatogory->id }}" class="function-link">quick view</a>
                        </div>
                    </div>
                    <<div class="product-info">
                        <a href="/{{ LaravelLocalization::getCurrentLocale() }}/p/{{ $postByCatogory->id }}" class="product-name"><span>{{$postByCatogory->caption}}</span></a>
                        <div class="wrap-price"><span class="product-price">${{$postByCatogory->price}}</span></div>
                    </div> 
                </div>
                 @endif
                 @endforeach
        </div><!--End wrap-products-->
    
    </div>
</div>


        </div><!--end row-->

    </div><!--end container-->

</main>
    </div>


@endsection