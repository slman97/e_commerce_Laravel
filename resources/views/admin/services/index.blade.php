@extends('layouts.master')


@section('title')
    Services Category  | funda of Web IT
@endsection


@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title">Services Category
                    <a href="{{url('service-create')}}" class="btn btn-primary float-right py-2">Add</a>
                    </h4>
                </div>
                    <div class="card-body">
                    <table class="table">
                         <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Description</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                 </tr>
                            </thead>
                    <tbody>
                    @foreach($services as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->service_name}}</td>
                        <td>{{$item->service_description}}</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
