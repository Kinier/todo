<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $todos = Todo::all()->where('user_id', Auth::id());
            return view('index', ['todos' => $todos]);
        }else{
            return view('index');
        }
    }

    public function createPage()
    {
        return view('todocreate');
    }

    public function createTodo(Request $request)
    {

        $credentials = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);
        $credentials['user_id'] = Auth::id();
        Todo::create($credentials);

        return redirect("/");
    }

}
