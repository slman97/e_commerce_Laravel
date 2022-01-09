@extends('layouts.app')
@section('content')
    
        @foreach ($masseges as $massege)
    <div style=" border: 2px solid #dedede;background-color: #f1f1f1;border-radius: 5px;padding: 10px;margin: 10px 0;" class="container">
        
        <p>{{ $massege->support }}</p>
        <span style="float: right; color: #aaa;" class="time-right">{{$massege->created_at}}</span>
     </div>
     @endforeach 
    
    
      
@endsection