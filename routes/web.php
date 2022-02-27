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

Route::get('welcome.blade.php', function() {
    return view('welcome');
});

Route::get('bearsandskunks.blade.php', function() {
   return view('bearsandskunks');
});

Route::get('donate.blade.php', function() {
    return view('donate');
});

Route::get('resources.blade.php', function() {
    return view('resources');
});

Route::get('about.blade.php', function() {
    return view('about');
});

Route::get('varroa.blade.php', function() {
    return view('varroa');
});









