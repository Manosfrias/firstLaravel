<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
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

    public function create(){
        $title = 'Nuevo usuario';
        
        return view('users.create', compact('title'));
    }

    public function show(User $user){
        $title = 'Ver usuario';

        // $user = User::find($id);
        
        // if ($user == null) return response()->view('errors.404',['title' => 'Error 404'], 404);

        return view('users.show', compact('title', 'user'));
    }

    public function edit($id){
        $title = 'Editar datos';
        
        return view('users.edit', compact('title', 'id'));
    }
}
