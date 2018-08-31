<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //__invoke nos permite llamar a un objeto como una función
    public function __invoke($name, $nickname = null){
        $name = ucfirst($name);
        $nickname = ucfirst($nickname);

        if($nickname) return "Bienvenido {$name}, tu apodo es {$nickname}";

        return "Bienvenido {$name}";
        
    }
}
