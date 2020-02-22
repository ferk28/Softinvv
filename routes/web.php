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

Auth::routes(['verify'=>'false']);
Route::group(['middleware' => ['verified']], function () {
    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
    Route::resource('/area', 'AreaController')->middleware('auth','language');
    Route::resource('/product', 'ProductController')->middleware('auth','language');
    Route::resource('/employee', 'EmployeeController')->middleware('auth','language');
    Route::resource('/boss', 'BossController')->middleware('auth','language');
    Route::resource('/safeguard', 'SafeguardController')->middleware('auth','language');
    Route::get('safeguard/pdf-download/{id}', 'SafeguardController@PDFgenerator')->middleware('auth');
});
