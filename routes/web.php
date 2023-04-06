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

Auth::routes(['register' => false]);

Route::group(['as' => 'front.'], function() {

    Route::get('/', 'FrontController@index')->name('index');
    
});

Route::group(['as' => 'register.', 'prefix' => 'register', 'namespace' => 'Auth'], function () {
    Route::get('/', 'RegisterController@index')->name('index');
    Route::post('/', 'RegisterController@store')->name('store');
    Route::get('{id}/success', 'RegisterController@success')->name('success');
});

Route::group(['as' => 'dashboard.', 'prefix' => 'admin', 'middleware' => ['auth','role:Administrator']], function() {

    Route::get('/', 'DashboardController@index')->name('index');
    
    Route::resource('user', 'UserController');
    Route::group(['as' => 'user.'], function() {
        Route::get('{id}/approve', 'UserController@approve')->name('approve');
    });

});
