@extends('layouts.admin')

@section('content')
<h1>
    Create Media
</h1>

{!! Form::open(['route'=>"media.store", 'method'=>"post", 'files'=>true, 'class'=>"dropzone", 'id'=>"my-awesome-dropzone"]) !!}
    {{Form::file('file')}}
{!! Form::close() !!}

@include('includes.form_error')
@stop

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection