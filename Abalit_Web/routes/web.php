<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [UsuarioController::class, 'signup'])->name('user.signup');
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/user/Edit', function () {
    return view('edit');
});
Route::get('/user/changePassword', function () {
    return view('changePassword');
});