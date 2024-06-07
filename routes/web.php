<?php

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

Route::get('/', function () {
    return view('welcome');
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

Route::get('/exhibitions_curator', function () {
    return view('exhibitions_curator');
});

Route::get('/exhibitions_curator_add', function () {
    return view('exhibitions_curator_add');
});

Route::get('/one_exhibits', function () {
    return view('one_exhibits');
});

Route::get('/one_exhibitions', function () {
    return view('one_exhibitions');
});