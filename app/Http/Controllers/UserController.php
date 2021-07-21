<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use App\Http\Resources\User as UserResource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {

        // OBSERVACOES
        // $movies = auth('api')->user()->metodo_provider_ou_model();
        // $data['user_id'] = auth('api')->user()->id;
        // $data['user_role'] = auth('api')->user()->role;
        // $data = auth('api')->user()->role;

        $users = User::all();

        if($request->is('api/*')) {
            // api logic
            // Se quiser paginação:
            // $movies = Movie::paginate(5);
            return UserResource::collection($users);
            return response()->json($users);

            // Provando que o role é visível, porém é melhor num middleware
            // return response()->json([
            //     'ROLE' => $data
            // ]);
        } else {
            // web logic
            return view('userlist', compact('users'));
        }
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $hashedPassword = Hash::make($request->input('password'));
        $user->password = $hashedPassword;
        $user->role = $request->input('role');


        if($user -> save()) {
            if($request->is('api/*')) {
                return new UserResource($user);
            } else {
                return redirect('/user');
            }
        }
    }

    /* LOGIN */
    // public function login(Request $request)
    // {
    //     // $user = User::findOrFail($request->email);
    //     $user = new User;
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     // return $user;
    //     return $request->input();
    // }

    public function show($id)
    {
        $user = User::findOrFail($id);
        if($request->is('api/*')) {

        return new UserResource($user);
        } else {
            return view('userdetails', ['user'=>$data]);
        }
    }

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

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user -> delete()) {
            return new UserResource($user);
        }
    }
}
