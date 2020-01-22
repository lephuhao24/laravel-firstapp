@extends('layouts.admin')

@section('content')
<h1>
    Create User
</h1>
{{-- 
<form action="{{ route('user.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name of new user" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email of new user" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="passwd">Password</label>
        <input type="text" name="passwd" id="passwd" type='password' class="form-control" placeholder="Enter Password of new user" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="custom-select" name="role" id="role">
            <option selected>Select one</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

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
    {{ Form::label('passwd', 'Password' , ['class' => 'control-label']) }}
    {{ Form::password('passwd', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('role', 'Role', ['class' => '']) }}
    {{ Form::select('role',[''=>'Choose One'] + $roles, null, ['class' => 'custom-select']) }}
</div>
<div class="form-group">
    {{form::label('file', 'File:')}}
    {{form::file('file', null, ['class' => 'form-control'])}}
</div>
    {{Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-success'])}}
{!! Form::close() !!}
@include('includes.form_error')

@stop