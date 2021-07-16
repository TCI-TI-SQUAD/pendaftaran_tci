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

            Route::post('logout','auth\authcotroller\AuthController@logout')->name('user.post.logout');

            // AJAX
                // AJAX GET FAKULTAS
                    Route::post('/getfakultas','auth\authcotroller\AuthController@getFakultas')->name('user.ajax.getFakultas');
                // END

                // AJAX GET PRODI
                    Route::post('/getprodi','auth\authcotroller\AuthController@getProdi')->name('user.ajax.getProdi');
                // END

                // AJAX GET SEKOLAH
                    Route::post('/getsekolah','auth\authcotroller\AuthController@getSekolah')->name('user.ajax.getSekolah');
                // END
            // END

        // AKHIR

        // AUTH MIDDLEWARE
            Route::middleware('auth')->group(function(){
                // USER DASHBOARD
                    Route::get('/beranda', function () {
                        return view('user-dashboard.user-dashboard-beranda');
                    })->name('user.dashboard');
    
                    Route::get('/pendaftaran', function () {
                        return view('user-dashboard.user-pendaftaran');
                    })->name('user.pendaftaran');
                // AKHIR
            });
        // END
    });
// AKHIR



