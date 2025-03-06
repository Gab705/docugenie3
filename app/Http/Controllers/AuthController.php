<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function showLogin(){
        return view('showLogin');
    }
    public function register(Request $request){
        $request->validate([
            'pseudo' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'pseudo' => $request->pseudo,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::user();

        return redirect()->route('correction');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('correction');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('showLogin');
    }
}
