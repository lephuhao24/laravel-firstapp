@extends('layouts.admin')

@section('content')
    <h1>Media</h1>
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
                <th>Image</th>
                <th>Created</th>
                <th>Udated</th>
            </tr>
        </thead>
        <tbody>
            @if($medias)
            @foreach($medias as $media)
            <tr>
                <td scope="row">{{$media->id}}</td>
                <td>{{$media->file}}</td>
                <td><img class="thumbnail" src="{{asset(@"/image/" . $media->file)}}" alt=""></td>
                {{-- <td>{{$media->created_at->diffForHumans()}}</td>
                <td>{{$media->updated_at->diffForHumans()}}</td> --}}
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop