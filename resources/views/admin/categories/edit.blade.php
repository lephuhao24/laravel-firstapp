@extends('layouts.admin')

@section('content')
<h1>
    Edit Post
</h1>

{!! Form::model($category, ['action'=>['AdminCategoriesController@update', $category->id], 'method'=>"patch", 'files'=>true]) !!}
<div class="form-group">
    {{ Form::label('name', 'Name' , ['class' => 'control-label']) }}
    {{ Form::text('name', null , ['class' => 'form-control']) }}
</div>
    {{Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-success'])}}
{!! Form::close() !!}
{!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category->id]]) !!}
    <div class="form-group">
        {!!Form::button('Delete User', ['type'=>'DELETE', 'class'=>'btn btn-danger mt-2'])!!}
    </div>
{!! Form::close() !!}
@include('includes.form_error')

@stop