@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
    <hr/>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
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
                <td>{{$user->name}}</td>
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