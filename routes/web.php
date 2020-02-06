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

Auth::routes(['verify'=>'true']);
Route::group(['middleware' => 'verified'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/area', 'AreaController')->middleware('language');
    Route::resource('/product', 'ProductController')->middleware('language');
    Route::resource('/employee', 'EmployeeController')->middleware('language');
    Route::resource('/boss', 'BossController')->middleware('language');
    Route::resource('/safeguard', 'SafeguardController')->middleware('language');
});
