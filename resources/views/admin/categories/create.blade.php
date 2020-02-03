@extends('layouts.admin')

@section('content')
<h1>
    Create Post
</h1>

{!! Form::open(['action'=>['AdminCategoriesController@store'], 'method'=>"post"]) !!}
<div class="form-group">
    {{ Form::label('name', 'Name' , ['class' => 'control-label']) }}
    {{ Form::text('name', null , ['class' => 'form-control']) }}
</div>
    {{Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-success'])}}
{!! Form::close() !!}
@include('includes.form_error')

@stop