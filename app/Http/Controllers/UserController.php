<?php

namespace App\Http\Controllers;


class UserController extends Controller
{

    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }

    public function profile(){
        return view("profile");
    }
}
