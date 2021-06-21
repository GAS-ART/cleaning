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

Route::get('/', function () { return view('home');})->name('index');
Route::get('/Главная', function () {return view('home');})->name('home');
Route::get('/Химчистка', function () {return view('dry-cleaning');})->name('dry-cleaning');
Route::get('/Мойка_окон', function () {return view('washing-windows');})->name('washing-windows');
Route::get('/Генеральная_уборка', function () {return view('spring-cleaning');})->name('spring-cleaning');
Route::get('/Послестроительная_уборка', function () {return view('post-construction-cleaning');})->name('post-construction-cleaning');
Route::post('/send', 'App\Http\Controllers\sendController@submit')->name('send');