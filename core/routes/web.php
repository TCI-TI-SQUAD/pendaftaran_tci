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
    return view('user-landing-page.landing-page');
})->name('user.landing-page');
// AKHIR

// ABOUT PAGE
Route::get('/about',function(){
    return view('user-landing-page.about-page');
})->name('user.about-page');
// AKHIR



// USER
    Route::prefix('user')->group(function(){
        // USER AUTH
            Route::get('login','auth\authcotroller\AuthController@index')->name('user.login');

            Route::get('register', 'auth\authcotroller\AuthController@register')->name('user.register');

            Route::post('login','auth\authcotroller\AuthController@loginPost')->name('user.post.login');

            Route::post('register','auth\authcotroller\AuthController@registerPost')->name('user.post.register');
        // AKHIR

        // USER DASHBOARD
            Route::get('/beranda', function () {
                return view('user-dashboard.user-dashboard-beranda');
            })->name('user.beranda');

            Route::get('/pendaftaran', function () {
                return view('user-dashboard.user-pendaftaran');
            })->name('user.pendaftaran');
        // AKHIR
    });
// AKHIR



