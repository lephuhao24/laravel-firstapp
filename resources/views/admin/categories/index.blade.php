@extends('layouts.admin')

@section('content')
    <h1>Categories </h1>
    @if(Session::has('deleted_user'))
    <hr/>
    <div class='alert-success'>{{Session('deleted_user')}}</div>
    @endif
    <hr/>
    <table class=" table table-responsive table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Udated</th>
            </tr>
        </thead>
        <tbody>
            @if($categories->count() > 0)
            @foreach($categories as $category) 
            <tr>
                <td scope="row">{{$category->id}}</td>
                <td><a href="{{route('category.edit', [$category->id])}}">{{$category->name}}</a></td>
                {{-- <td>{{$category->created_at->diffForHumans()}}</td>
                <td>{{$category->updated_at->diffForHumans()}}</td> --}}
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop