@extends('layouts.master')
@section('title')
   Registered Roles | funda of Web IT
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Registered Roles</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                               Usertype
                            </th>
                            <th>
                               Admin Until
                            </th>
                            <th>
                               EDIT
                            </th>
                            <th>
                             DELETE
                            </th>
                            </thead>
                            <tbody>
                            @foreach($users as $row)

                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td> {{ $row->username }}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->usertype}}</td>
                                <td>{{$row->admin_until}}</td>
                                <td>
                                    <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                                </td>
                                <td>
                                    <form action="/role-delete/{{$row->id}}" method="post">
                                        <input type="hidden" name="id" value="{{$row->id}}">
                                        {{csrf_field() }}
                                        {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>  </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection


@section('scripts')

@endsection
