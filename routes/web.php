<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login', [UserController::class, "login"])->name("login");

Route::get('register', [UserController::class, "register"])->name("register");

Route::get('profile', [UserController::class, "profile"])->name("profile")->middleware(Authenticate::class);

Route::post('auth/register', [RegisterController::class, "register"])->name("auth.register");

Route::post('auth/login', [LoginController::class, "login"])->name("auth.login");

Route::get('auth/logout', [LogoutController::class, "logout"])->name("auth.logout");

Route::get('todo/create', [TodoController::class, "createPage"])->name("todo.createPage")->middleware(Authenticate::class);

Route::post('todo/create', [TodoController::class, "createTodo"])->name("todo.create")->middleware(Authenticate::class);

Route::delete('todo/delete/{id}', [TodoController::class, "deleteTodo"])->name("todo.delete.id")->middleware(Authenticate::class);


// Route::get('todo/all', [TodoController::class, "getTodos"])->name("todo.all")->middleware(Authenticate::class);

Route::get('/', [TodoController::class, "index"])->name("todo.index");

// Route::get('/', function () {
//     return view('welcome');
// });

