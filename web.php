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

Route::get('/login', function () {
    return view('login');
});
Route::get('/quenmatkhau', function () {
    return view('Forgotpassword');
});
Route::get('/taikhoancanhan', function () {
    return view('personalaccount');
});
Route::get('/matkhaumoi', function () {
    return view('newpassword');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/maygioroi', function () {
    return "<h1>8 giờ rồi def</h1>";
});

Route::post('/register',[myController::class,'dangkythanhvien']);
Route::post('/register/submit',[myController::class,'nhandi']);