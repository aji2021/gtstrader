<?php

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

Auth::routes();
Route::get('/', 'DashboardController@index');
Route::post('/registercreate', 'RegisterController@create');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@index');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'ProfileController@read');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::get('/update', 'UserController@update');
    });

    Route::group(['prefix' => 'member'], function () {
        Route::get('/approve', 'MemberController@approve');
        Route::get('/reject', 'MemberController@reject');
        Route::get('/approveupdate/{id}', 'MemberController@approveUpdate');
    });

    Route::group(['prefix' => 'member_baru'], function () {
        Route::get('/', 'MemberBaruController@index');
        Route::get('/update', 'MemberBaruController@update');
        Route::get('/approve/{id}', 'MemberBaruController@approve');
        Route::get('/reject/{id}', 'MemberBaruController@reject');
    });


    Route::group(['prefix' => 'transaksi'], function () {
        Route::get('/deposit', 'TransaksiController@depositRead');
        Route::post('/createdeposit', 'TransaksiController@createDeposit');
        
        Route::get('/withdraw', 'TransaksiController@withdrawRead');
        Route::post('/createwithdraw', 'TransaksiController@createWithdraw');
    });
});