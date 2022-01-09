@extends('layouts.app')
@section('titel','payment')
@section('content')
<div class="container pb-60">
    <div class="row">
        <div class="col-md-12 text-center">
            <a style="font-size:3vw ; padding-top:3%" >you well have a message for complet prosses.</a>
            <br>
             <div class="checkout-info">
                <a class="link-to-shop" href="/{{ LaravelLocalization::getCurrentLocale() }}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection()