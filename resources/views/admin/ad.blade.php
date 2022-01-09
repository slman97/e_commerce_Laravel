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
                                post id
                            </th>
                            <th>
                                ad type
                              </th>
                            <th>
                              ad day
                            </th>
                            <th>
                                ad price
                              </th>
                            <th>
                             created_at
                            </th>
                            <th>
                            updated_at

                           
                            </thead>
                            <tbody>
                            @foreach($items as $row)

                            <tr>

                                <td>{{ $row->user_id }}</td>
                                <td> {{ $row->post_id }}</td>
                                <td> {{ $row->adtype }}</td>
                                <td> {{ $row->ad_day }}</td>
                                <td> {{ $row->ad_price }}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>

                                <td>
                                    <form action="/ad-update/{{$row->id}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$row->id}}">
                                    <button type="submit" class="btn btn-success">accept</button>
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

