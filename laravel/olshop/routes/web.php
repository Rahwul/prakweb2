<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\InputController;

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

Route::get('/salam', function () {
    return view('Halo gaiss!!!');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/nf', function () {
    return view('nf',["nama" => "Rahwul Ihsan", "umur" => "19", "email" => "jsmn@gmail.com"]);
});

Route::get('/kesehatan', function () {
    return view('kesehatan',["nama" => ":", "umur" => "19", "email" => "jsmn@gmail.com"]);
});

Route::get('/input', function () {
    return view('input');
});
Route::get('/output', function () {
    return view('output');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class,'output']);