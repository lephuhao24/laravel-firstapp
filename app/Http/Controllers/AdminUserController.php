<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Photo;
use Hash;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('image', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        User::create($input);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        //
        
        $user = User::findOrFail($id);
        //check if requset have password or not
        // if(trim($request->password) == ''){
        //     $input = $request->except('password');
        // }else{
        //     $input = $request->all();
        //     $input['password'] = Hash::make($request->password);
        // };
        //check if request has file img or not
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('image', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        // return array($user, $input);
        // $user->name = $input['name'];
        // $user->role_id = $input['role_id'];
        // $user->email = $input['email'];
        // $user->password = $input['password'];
        // $user->photo_id = $input['photo_id'];
        // $user->save();
        $user->update($input);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
