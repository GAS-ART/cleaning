<?php

use Illuminate\Support\Facades\App;
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
Route::post('/send', 'App\Http\Controllers\sendController@submit')->name('send');
Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');

Route::get('/', function () {App::setLocale('ua'); return view('home');})->name('index');
Route::get('/ua', function () {App::setLocale('ua'); return  redirect('/');});

Route::get('/{locale}', function ($locale) {
   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('home');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('home');
   }
   })->name('index.lang');
Route::get('/{locale}/Главная', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('home');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('home');
   }

})->name('home.lang');
Route::get('/{locale}/Химчистка', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('dry-cleaning');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('dry-cleaning');
   }

})->name('dry-cleaning.lang');
Route::get('/{locale}/Мойка_окон', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('washing-windows');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('washing-windows');
   }

})->name('washing-windows.lang');

Route::get('/{locale}/Генеральная_уборка', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('spring-cleaning');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('spring-cleaning');
   }

})->name('spring-cleaning.lang');

Route::get('/{locale}/Послестроительная_уборка', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('post-construction-cleaning');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('post-construction-cleaning');
   }
})->name('post-construction-cleaning.lang');

Route::get('/politika_konfidencialnosti', function () {return view('politika_konfidencialnosti');})->name('politika_konfidencialnosti');

Route::get('/{locale}/уборка-после-пожара', function ($locale) {

   if (! in_array($locale, ['ua', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('fire');

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('fire');
   }
})->name('fire.lang');

Route::get('/politika_konfidencialnosti', function () {return view('politika_konfidencialnosti');})->name('politika_konfidencialnosti');