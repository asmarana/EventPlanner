<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/gallery', function () {
    return view('Gallery');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/', function () {
    return view('Home');
});
Route::get('/event', function () {
    return view('Event');
});

Route::post('store',[PostController::class,'store']);
Route::get('show',[PostController::class,'show']);
Route::get('delete/{id}',[PostController::class,'destroy']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
