@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
    <hr/>
    <table class=" table table-responsive table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Role</th>
                <th>Online</th>
                <th>Email</th>
                <th>Created</th>
                <th>Udated</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
            @foreach($users as $user)
            <tr>
                <td scope="row">{{$user->id}}</td>
                <td>
                    <img class="thumbnail" src="{{asset(@"/image/" . $user->photo->file)}}" alt=""></td>
                <td><a href="{{route('user.edit', [$user->id])}}">{{$user->name}}</a></td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active ? 'Active' : 'Inactive'}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop