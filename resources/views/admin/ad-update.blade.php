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
                     <form action="/adupdate/{{$ads->id}}" method="post">
                         {{csrf_field()}}
                         {{method_field('PUT')}}
                        
                         <div class="form-group">
                             <label >Ads Type</label>
                             <select name="{{$ads->adtype}}" class="form-control">
                                 <option value="unaccept">unaccept</option>
                                 <option value="accept">accept</option>
                             </select>
                         </div>
                         <button type="submit" class="btn btn-success"> Update</button>
                         <a href="/adcancel" type="submit" class="btn btn-danger"> Cancel</a>

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
