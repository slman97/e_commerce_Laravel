@extends('layouts.app')
@section('titel','payment')
@section('content')
<div class="container pb-60">
    <div class="row">
        <script>
            alert("open you mobile app and enter the ammount then scan the QR from the screen.");
            </script>
        <div class="col-md-12 text-center">
            <a><img width="400" height="400" src="{{asset('f\img\qr.png')}}"></a>
            <p style="font-size: 20px">total price : ${{$totalprice}}</p>
            <a href="/cart/{{$user->id}}/checkout/ok" class="btn btn-submit btn-submitx" >{{__('done')}}</a>
        </div>
        
    </div> 
</div>
@endsection()