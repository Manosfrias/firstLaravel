<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if( request()->has('empty') ) {
            $users = [];
        } else {
            $users = ['Iñigo', 'Ekaitz', 'Itxasne', 'Ainara', 'Mikel', 'Iulene'];
        }

        
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

    public function show($id){
        $title = 'Ver usuario';
        
        return view('users.show', compact('title', 'id'));
    }

    public function edit($id){
        $title = 'Editar datos';
        
        return view('users.edit', compact('title', 'id'));
    }
}
