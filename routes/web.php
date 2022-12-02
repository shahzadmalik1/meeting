<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['AuthMiddleware'])->group(function() {

    Route::group(['prefix' => 'meetings'], function () {
        Route::get('','App\Http\Controllers\MeetingController@index');
        Route::get('create','App\Http\Controllers\MeetingController@create');
        Route::post('store','App\Http\Controllers\MeetingController@store');
        Route::get('show/{id}','App\Http\Controllers\MeetingController@show');
        Route::get('edit/{id}','App\Http\Controllers\MeetingController@edit');
        Route::post('update/{id}','App\Http\Controllers\MeetingController@update');
        Route::get('delete/{id}','App\Http\Controllers\MeetingController@delete');
        Route::post('add-attendie/{id}','App\Http\Controllers\MeetingController@addAttendie');

    });
});
