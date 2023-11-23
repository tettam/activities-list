<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        //Verifica se está logado
        //Se a sessão é valida
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function register() {
        //Faz um SELECT all de todos os dados do usuário
        //Normalmente para pegar os dados do usuário
        if (Auth::User()) {
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed' //Com o confirmed ele busca o password_confirmation
        ]);

        $data = $request->only('name', 'email', 'password');
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        
        return redirect(route('login'));
    }

    public function login_action(Request $request) {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($validator)) {
            return redirect()->route('home');
        };
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}