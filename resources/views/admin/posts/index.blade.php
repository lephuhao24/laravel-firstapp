@extends('layouts.admin')

@section('content')
    <h1>Posts </h1>
    @if(Session::has('deleted_user'))
    <hr/>
    <div class='alert-success'>{{Session('deleted_user')}}</div>
    @endif
    <hr/>
    <table class=" table table-responsive table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Udated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
            @foreach($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category->name}}</td>
                <td><img class="thumbnail" src="{{asset(@"/image/" . $post->photo->file)}}" alt=""></td>
                <td><a href="{{route('post.edit', [$post->id])}}">{{$post->title}}</a></td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop