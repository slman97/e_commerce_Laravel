@extends('layouts.master')
@section('title')
   Edit-Registered | funda of Web IT
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered User.</h3>
                </div>
                <div class="card-body">
                 <div class="col-md-6">
                     <form action="/messages-reply/{id}" method="post">
                         {{csrf_field()}}
                         {{method_field('PUT')}}
                         <div class="form-group" >
                             <label >reply</label>
                             <input type="text"  name="support" placeholder="reply" class="form-control">
                         </div>
                         
                         <button type="submit" class="btn btn-success"> Reply</button>
                        
                     </form>
                 </div>




                </div>

            </div>

        </div>

    </div>

</div>


@endsection


@section('scripts')

@endsection
