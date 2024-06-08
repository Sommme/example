<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExhibitController;
use App\Http\Controllers\ExhibitionController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');;
Route::get('/', [ExhibitionController::class, 'get_welcome_index'])->name('welcome');


Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/confirm_login', [AuthController::class, 'login_confirm']);

Route::post('/login/confirm_register', [AuthController::class, 'register_confirm']);



Route::group(['middleware' => ['auth', 'role:curator']], function () {
    // Route::get('/exhibitions_curator', function () {
    //     return view('exhibitions_curator');
    // });
    Route::get('/exhibitions_curator', [ExhibitionController::class, 'exhibitions_curator_index']);
    
    Route::get('/exhibitions_curator_add', function () {
        return view('exhibitions_curator_add');
    });
    Route::delete('/exhibition/delete/{id}', [ExhibitionController::class, 'delete_exhibition'])->name('exhibition.delete');
    
    Route::get('/new_exhibit', [ExhibitController::class, 'new_exhibit_index'])->name('new_exhibit.index');
    Route::post('/new_exhibit/create', [ExhibitController::class, 'create'])->name('new_exhibit.create');
    
});



Route::group(['middleware' => ['auth', 'role:visitor']], function () {
    Route::get('/tickets', function () {
        return view('tickets');
    });

    Route::get('/bot_settings', function () {
        return view('bot_settings');
    });
});

Route::get('/exhibitions', function () {
    return view('exhibitions');
});

Route::get('/exhibits', function () {
    return view('exhibits');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/exhibit/{id}', function () {
    return view('exhibit');
});

Route::get('/exhibition/{id}', function () {
    return view('exhibition');
});
