@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('angular-ui-tree/angular-ui-tree.min.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Jobs ({{$data->total()}})
                        <a href="{{route('jobs.create')}}" class="btn btn-success">Add</a>
                    </div>
                    @if($data->total())
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Status</th>
                                    <th>Url</th>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td >{{$item->status}}</td>
                                        <td style="word-break: break-all; width: 20%;"><a href="{{$item->url}}" target="_blank">{{$item->url}}</a></td>
                                        <td style="word-break: break-all; width: 20%;">{{$item->name}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        {{$data->appends(request()->query())->links()}}
    </div>
    {{--{{dd($data)}}--}}
@endsection
