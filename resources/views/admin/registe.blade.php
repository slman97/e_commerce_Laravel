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
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table">
                            <thead class=" text-primary">

                            <th>
                                User_Id
                            </th>
                            <th>
                                Caption
                            </th>
                            <th>
                              Image
                            </th>
                            <th>
                             created_at
                            </th>
                            <th>
                            updated_at

                            <th>
                             DELETE
                            </th>
                            </thead>
                            <tbody>
                            @foreach(    $posts as $row)

                            <tr>

                                <td>{{ $row->user_id }}</td>
                                <td> {{ $row->caption }}</td>
                                <td>  <img src="/storage/{{$row->image }}" width="100px" /> </td>

                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>

                                <td>
                                    <form action="/role-delet/{{$row->id}}" method="post">
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
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>

@endsection

