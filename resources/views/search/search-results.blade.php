@extends('layouts.app')

@section('title', 'Search Results')
@section('content')
<div class="container">
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
</div>

<div class="search-results-container container">
    

    @if ($posts->count() > 0)
    <div class="container">
        <main id="main" class="main-site left-sidebar">
     
         <div class="container">
             <div class="row">
                 <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                     <div class="row">
                         <ul class="product-list grid-products equal-container">
                             @foreach($posts as $post)
                             <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                 <div class="product product-style-3 equal-elem ">
                                     <div class="product-thumnail">
                                         <a href="/p/{{ $post->id }}" title="{{$post->short_discription}}">
                                             <figure><img src="/storage/{{ $post->image }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                         </a>
                                     </div>
                                     
                                     <div class="product-info">
                                         <a href="#" class="product-name"><span>{{$post->caption }}</span></a>
                                         <div class="wrap-price"><span class="product-price">{{ $post->price}}$</span></div>
                                          
                             </li>
                             @endforeach
                         </ul>
     
                     </div>
     
                 
                 </div><!--end main products area-->
     
                 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                     <div class="widget mercado-widget categories-widget">
                         <div class="widget-content">
                             <ul class="list-category">
                                 <li class="category-item has-child-cate">
                                     <a style="font-size:3vw ; padding-top:3%" class="cate-link">Results</a>
                                 </li>
                                 <li class="category-item has-child-cate">
                                     <a class="cate-link">{{ $posts->count() }} result(s) for '{{ request()->input('query') }}</a>
                                 </li> 
                                 
                             </ul>
                         </div>
                     </div><!-- Categories widget-->
     
                 </div><!--end sitebar-->
     
             </div><!--end row-->
     
         </div><!--end container-->
     
     </main>
    
     </div>
    @else 
     <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
                <a><img src="{{asset('f\img\no-search-found.png')}}"></a>
                <p>{{__('We did not find any results for')}}:{{ request()->input('query') }}</p>
                <a href="/" class="btn btn-submit btn-submitx">{{__('Continue Shopping')}}</a>
            </div>
        </div>
    </div>
    @endif
    
      
   
     </div> <!-- end search-results-container -->



@endsection