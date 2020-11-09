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
    return view('home');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/process', function () {
    return view('process');
});
Route::get('/farmer', function () {
    return view('farmer');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/agro', function () {
    return view('agro');
});
Route::get('/icon', function () {
    return view('icon');
});