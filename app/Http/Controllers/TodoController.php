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

    public function deleteTodo(Request $request){
        $credentials['id'] = $request->route('id');
        $credentials['user_id'] = Auth::id();
        if (Todo::where('id', $credentials['id'])->where('user_id', $credentials['user_id'])->delete()){
            return redirect('/');
        }


    }

    public function updatePage(Request $request){
        $credentials['id'] = $request->route('id');
        $credentials['user_id'] = Auth::id();
        $todo = Todo::where('id', $credentials['id'])->where('user_id', $credentials['user_id'])->first();
        if ($todo){
            return view('/todoupdate', ['todo'=> $todo]);
        }


    }

    public function updateTodo(Request $request)
    {

        $credentials = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);
        $credentials['user_id'] = Auth::id();
            Todo::where('id', $request->route('id'))->
            where('user_id', $credentials['user_id'])->
            update(['title'=>$credentials['title'], 'content' => $credentials['content']]);

        return redirect("/");
    }

}
