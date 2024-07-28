<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(LoginRequest $request){
        $data = $request->validated();
        dd($data);
    }
}
