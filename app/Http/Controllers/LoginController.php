<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index_login()
    {
        return view('login');
    }
    
    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $password->password;
        
        $is_account = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);
        
        if($is_account) {
            return redirect('/prefecture');
        } else {
            return redirect('/login');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
