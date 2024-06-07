<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::fallback(function () {
    return redirect()->route('/');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;


Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/confirm_login', [AuthController::class, 'login_confirm']);

// Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login/confirm_register', [AuthController::class, 'register_confirm']);

// Группа маршрутов для роли "куратор"
Route::group(['middleware' => ['auth', 'role:curator']], function () {
    // Route::get('/curator-dashboard', function () {
    //     return view('curator.dashboard');
    // });
    // Другие маршруты для куратора
});

// Группа маршрутов для роли "посетитель"
Route::group(['middleware' => ['auth', 'role:visitor']], function () {
    // Route::get('/my_tickets', function () {
    //     return view('my_tickets');
    // });
});

Route::get('/exhibitions', function () {
    return view('exhibitions');
});

Route::get('/exhibits', function () {
    return view('exhibits');
});

Route::get('/my_tickets', function () {
    return view('my_tickets');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/authorization', function () {
    return view('authorization');
});

