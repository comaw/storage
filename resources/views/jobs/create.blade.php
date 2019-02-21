@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Creating
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="panel-body">
                        <form action="{{route('jobs.create')}}" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{$name}}" placeholder="Name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="url" class="form-control" value="{{$url}}" placeholder="Url" required autocomplete="off">
                            </div>
                            {{ csrf_field() }}
                            <button class="btn btn-success">Store</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
