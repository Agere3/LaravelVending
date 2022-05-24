<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function acceder(Request $req, Redirector $redirect){
        $credentials = $req->only('name','password');
        // return $credentials;

        if(Auth::attempt($credentials)){
            return $redirect->to('/acceso');
        }
        throw ValidationException::withMessages([
            'name' => __('auth.failed') + "<br>"
        ]);
    }

    public function logout(Redirector $redirect){
        Auth::logout();
        return $redirect->to('/acceso')->with('status',"Has tancat la sesiò");
    }
}
