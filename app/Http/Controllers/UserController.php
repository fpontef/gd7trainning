<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use App\Http\Resources\User as UserResource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate(5);
        // return UserResource::collection($users);

        $users = User::all();
        return response()->json($users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $hashedPassword = Hash::make($request->input('password'));
        $user->password = $hashedPassword;
        $user->role = $request->input('role');


        if($user -> save()) {
            return new UserResource($user);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // $user = User::findOrFail($request->email);
        $user = new User;
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        // return $user;
        return $request->input();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $hashedPassword = Hash::make($request->input('password'));
        $user->password = $hashedPassword;
        $user->role = $request->input('role');

        if($user -> save()) {
            return new UserResource($user);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user -> delete()) {
            return new UserResource($user);
        }
    }
}
