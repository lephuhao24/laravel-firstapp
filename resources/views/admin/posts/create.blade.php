@extends('layouts.admin')

@section('content')
<h1>
    Create Post
</h1>

{!! Form::open(['route'=>"post.store", 'method'=>"post", 'files'=>true]) !!}
<div class="form-group">
    {{ Form::label('title', 'Title' , ['class' => 'control-label']) }}
    {{ Form::text('title', null , ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Body' , ['class' => 'control-label']) }}
    {{ Form::textarea('body', null , ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('category_id', 'Category', ['class' => '']) }}
    {{ Form::select('category_id',[''=>'Choose One'] + $categories, null, ['class' => 'custom-select']) }}
</div>
<div class="form-group">
    {{ Form::label('user_id', 'User', ['class' => '']) }}
    {{ Form::select('user_id',[''=>'Choose One'] + $users, null, ['class' => 'custom-select']) }}
</div>
<div class="form-group">
    {{form::label('photo_id', 'File:')}}
    {{form::file('photo_id', null, ['class' => 'form-control'])}}
</div>
    {{Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-success'])}}
{!! Form::close() !!}
@include('includes.form_error')

@stop