@extends('layouts.admin')

@section('content')
<h1>
    Create User
</h1>

{!! Form::open(['route'=>"user.store", 'method'=>"post", 'files'=>true]) !!}
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
@include('includes.form_error')

@stop