@extends('layouts.master')


@section('title')
    Posts Reports  | funda of Web IT
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

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post</th>
                            <th>User</th>
                            <th>Details</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->post->caption ?? 'deleted post'}}</td>
                                <td>{{$item->user->username ?? 'deleted account'}}</td>
                                <td>{{$item->details}}</td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
