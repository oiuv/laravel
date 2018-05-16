@extends('layouts.default')
@section('title', $user->name)
@section('content')

    <div class="col-md-12">

        <section class="user_info">
            @include('shared._user_info', ['user' => $user])
        </section>

    </div>
@endsection