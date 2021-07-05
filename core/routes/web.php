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

// LANDING PAGE
Route::get('/',function(){
    return view('landing-page');
});
// AKHIR


// AUTH
Route::prefix('user')->group(function(){

    Route::get('/login', function () {
        return view('auth.user-login');
    })->name('user.login');

    Route::get('/register', function () {
        return view('auth.user-register');
    })->name('user.register');

});
// AKHIR


