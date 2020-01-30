@extends('layouts.admin')

@section('content')
<h1>
    Edit User Id: {{$user->id}}
</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-3"><img class="img-fluid" src="{{ asset('image/'.$user->photo->file) }}" alt="" srcset=""></div>
        <div class="col-sm-9">
            {!! Form::model($user, ['action'=>['AdminUserController@update', $user->id], 'method'=>"patch", 'files'=>true]) !!}
            <div class="form-group">
                {{ Form::label('name', 'Name' , ['class' => 'control-label']) }}
                {{ Form::text('name', null , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'Email' , ['class' => 'control-label']) }}
                {{ Form::email('email', null , ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password' , ['class' => 'control-label']) }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('role_id', 'Role', ['class' => '']) }}
                {{ Form::select('role_id',[''=>'Choose One'] + $roles, null, ['class' => 'custom-select']) }}
            </div>
            <div class="form-group">
                {{form::label('photo_id', 'File:')}}
                {{form::file('photo_id', null, ['class' => 'form-control'])}}
            </div>
                {{Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-success'])}}
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
            <div class="form-group">
                {!!Form::button('Delete User', ['type'=>'DELETE', 'class'=>'btn btn-danger mt-2'])!!}
            </div>
            {!! Form::close() !!}

            @include('includes.form_error')
        </div>
    </div>
</div>
@stop