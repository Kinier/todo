<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }

    public function profile(){
        $user['name'] = Auth::user()->name;
        $user['email'] = Auth::user()->email;
        $todos = Todo::all()->where('user_id', Auth::id());
        return view("profile", ['user' => $user, 'todos' => $todos]);
    }
}
