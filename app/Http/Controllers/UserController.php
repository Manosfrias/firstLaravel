<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
    * Showing a list of users
    */
    public function index(){
        $users = User::all();
        
        $title = 'Listado de usuarios';
        return view('users.index', compact('title', 'users'));

        // dd(compact('title', 'users'));
        // die();

        // return view('users')
        //     ->with('users', $users)
        //     ->with('title', $title);

        // return view('users', [
        //     'users'=>$users,
        //     'title' => 'Listado de usuarios'
        // ]);
    }

    /*
    * Creating a new user
    */
    public function create(){
        $title = 'Nuevo usuario';
        
        return view('users.create', compact('title'));
    }

    /*
    * Storing a new user
    */
    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6']
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email es correcto',
            'email.unique' => 'Este email ya está en uso',
            'password.required' => 'El campo contraseña es obligatorio',
            'password.min' => 'Tienes que usar mínimo 6 caracteres para el password',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users');

    }

    /*
    * Showing an user
    */
    public function show(User $user){
        $title = 'Ver usuario';

        // $user = User::find($id);
        
        // if ($user == null) return response()->view('errors.404',['title' => 'Error 404'], 404);

        return view('users.show', compact('title', 'user'));
    }

    /*
    * Editing an user
    */
    public function edit(User $user){
        $title = 'Editar datos';
        
        return view('users.edit', [
            'user' => $user,
            'title' => $title
        ]);
    }
}
