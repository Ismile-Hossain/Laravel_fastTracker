<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class CustomAuthController extends Controller
{
    public function login(){
        return view("login");
    }
    public function registration(){
        return view("activate");
    }
    //|string|email|max:255|unique:users
    //|string|confirmed|min:8
    public function registerUser(Request $request){
    $request->validate([
    'email'=> 'required|email|unique:users',
    'password'=> [
        'required','min:5','max:12',
        Password::min(8)->letters()->numbers()->mixedCase()
     ],
    'password_confirmation'=>'required'
    ]
    );

    }
}
