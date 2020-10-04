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
    return redirect('home');
 });
 
Route::get('/home', function () {
   return view('top');
});

Route::get('/sub', function () {
   return view('sub');
})->middleware("auth");

//ログイン処理
// Route::post('login/{id}', 'LoginController@login');
Route::post('/login', function () {
    return view('/login');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
