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

Route::get('/', 'MainController@index')->name('start');
Route::get('/register', 'RegistrationController@showRegisterPage')->name('register');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/registration', 'RegistrationController@registration')->name('proceedRegister');

Route::middleware('auth')->group(function () {
    Route::get('/main', 'MainPageController@index')->name('mainPage');
});
