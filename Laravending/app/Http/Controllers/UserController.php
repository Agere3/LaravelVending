<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function prova(){
        return "Si, todo bien";
    }

    public function acceder(Request $req){
        $credentials = $req->only('name','password');

        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return view('productos',array($req['name']));
        }
        return view('acceso');

        // if($username==$pwd) return view('compraRealizada');
    }
}
