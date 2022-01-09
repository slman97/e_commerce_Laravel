@extends('layouts.app')

@section('content')
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="/category/PROGRAMMING.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        <h2 class="f-title">PROGRAMMING AND DEVELOPMENT <b></b></h2>
                        <span class="subtitle">web app mobile app and another programing.</span>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="/category/E-MARKETING.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                        <h2 class="f-title">E-MARKETING</h2>
                        <span class="f-subtitle">On online payments</span>
                        <p class="discount-code">sad</p>
                        <h4 class="s-title"> sad </h4>
                        <p class="s-subtitle"> sa </p>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="/category/DESIGN.png" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great designs and cool things that users can build <b>3D models</b></h2>
                        <span class="f-subtitle"> and cool things that users can build.</span>
                        <p class="sale-info">Stating at: <b class="price">$5.00</b></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>


        

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">ADs</h3>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >


                                @foreach ( $postads as $postad )
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                       
                                        <a href="/p/{{$postad->id}}" title="{{$postad->caption}}">
                                            <figure><img src="/storage/{{$postad->image}}" width="800" height="800" alt="{{$postad->caption}}"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">AD</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="/p/{{$postad->id}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="/p/{{$postad->id}}" class="product-name"><span>{{$postad->caption}}</span></a>
                                        <div class="wrap-price"><span class="product-price">${{$postad->price}}</span></div>
                                    </div>
                                </div>
                                @endforeach
                               

                            </div>
                        </div>							
                    </div>
                </div>
            </div>
            <h3 class="title-box">Latest Products</h3>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >


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
                        </div>							
                    </div>
                </div>
            </div>
        

        <!--Programming and development-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Programming and development</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[0]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/PROGRAMMING.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($prs as $pr)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$pr->id}}" title="{{$pr->caption}}">
                                        <figure><img src="/storage/{{$pr->image}}" width="800" height="800" alt="{{$pr->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$pr->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$pr->id}}" class="product-name"><span>{{$pr->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$pr->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>	
        
        
        <!-- E-Marketing -->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">E-Marketing</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[1]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/E-MARKETING.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($ems as $em)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$em->id}}" title="{{$em->caption}}">
                                        <figure><img src="/storage/{{$em->image}}" width="800" height="800" alt="{{$em->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$em->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$em->id}}" class="product-name"><span>{{$em->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$em->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

         <!-- remote training -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">remote training</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[2]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/REMOTE.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($rts as $rm)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$rm->id}}" title="{{$rm->caption}}">
                                        <figure><img src="/storage/{{$rm->image}}" width="800" height="800" alt="{{$rm->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$rm->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$rm->id}}" class="product-name"><span>{{$rm->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$rm->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

         <!-- Design a video -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Design a video</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[3]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/DESIG.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($dvs as $dv)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$dv->id}}" title="{{$dv->caption}}">
                                        <figure><img src="/storage/{{$dv->image}}" width="800" height="800" alt="{{$dv->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$dv->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$dv->id}}" class="product-name"><span>{{$dv->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$dv->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

         <!-- Design -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Designs</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[4]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/DESIGN.png" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($des as $de)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$de->id}}" title="{{$de->caption}}">
                                        <figure><img src="/storage/{{$de->image}}" width="800" height="800" alt="{{$de->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$de->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$de->id}}" class="product-name"><span>{{$de->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$de->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

         <!-- audios -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">audios</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[5]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/AUDIOS1.png" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($aus as $au)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$au->id}}" title="{{$au->caption}}">
                                        <figure><img src="/storage/{{$au->image}}" width="800" height="800" alt="{{$au->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$au->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$au->id}}" class="product-name"><span>{{$au->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$au->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

        
         <!-- Writing and translatin -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Writing and translatin</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[6]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/WRITING.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($wrs as $wr)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$wr->id}}" title="{{$wr->caption}}">
                                        <figure><img src="/storage/{{$wr->image}}" width="800" height="800" alt="{{$wr->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$wr->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$wr->id}}" class="product-name"><span>{{$wr->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$wr->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

       <!-- Business -->
         <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Business</h3>
            <div class="wrap-top-banner">
                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/shop/{{$categoryes[7]->category_id}}" class="link-banner banner-effect-2">
                    <figure><img src="/category/BUSINESS.jpg" width="1170" height="100" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1"> 
                        <div class="tab-content-item }}" >
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($bus as $bu)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/p/{{$bu->id}}" title="{{$bu->caption}}">
                                        <figure><img src="/storage/{{$bu->image}}" width="800" height="800" alt="{{$bu->caption}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="/p/{{$bu->id}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/p/{{$bu->id}}" class="product-name"><span>{{$bu->caption}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$bu->price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                            </div>  
                        </div>
                        
                    
                </div>
            </div>
        </div>

        

       </div>

</main>
</div></div>
@endsection


