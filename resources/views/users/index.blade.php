@extends('layouts.app')
    @section('content')
        <h1>The login page</h1>
        {{Form::open(['action' => 'UserController@store', 'method' => 'post', 'class' => 'storeForm'])}}
        <div class="btnWrapper">
            {{Form::label('', '')}}
            {{ Form::text('username') }}
            {{Form::label('', '')}}
            {{ Form::text('email') }}
            {{Form::label('', '')}}
            {{ Form::text('password') }}
        </div>
        {{ Form::submit('Submit')}}
        {{Form::close()}}
    @endsection