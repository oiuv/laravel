@extends('layouts.default')
@section('title', $exception->getMessage())
@section('content')
    <div class="col-sm-auto col-md-8 my-2">
        <div class="alert alert-danger" role="alert">
            <h4>权限不足</h4>
            <hr>
            <strong class="my-5">
                {{$exception->getMessage()}}
            </strong>
        </div>
    </div>

@endsection