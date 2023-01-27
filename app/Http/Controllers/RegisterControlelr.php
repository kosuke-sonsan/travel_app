<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index_register()
    {
        return view('register');
    }
    
    public function register(RegisterRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        
        return redirect('/login');
    }
}