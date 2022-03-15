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
Route::get('about.blade.php', function() {
    return view('about');
});

Route::get('bearsandskunks.blade.php', function() {
    return view('bearsandskunks');
});

Route::get('beeginner.blade.php', function() {
    return view('beeginner');
});

Route::get('comments.blade.php', function() {
    return view('comments');
});

Route::get('donate.blade.php', function() {
    return view('donate');
});

Route::get('editcomment.blade.php', function() {
    return view('editcomment');
});

Route::get('foulbrood.blade.php', function() {
    return view('foulbrood');
});

Route::get('hivebeetle.blade.php', function() {
    return view('hivebeetle');
});

Route::get('resources.blade.php', function() {
    return view('resources');
});

Route::get('stateprograms.blade.php', function() {
    return view('stateprograms');
});

Route::get('varroa.blade.php', function() {
    return view('varroa');
});

Route::get('waxmoth.blade.php', function() {
    return view('waxmoth');
});

Route::get('welcome.blade.php', function() {
    return view('welcome');
});










