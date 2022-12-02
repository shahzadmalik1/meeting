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

Route::prefix('meetings')->group(function () {
   
    
    Route::get('/', [App\Http\Controllers\MeetingController::class, 'index']);
    Route::get('add-view', function () {
        return view('add-view');
    });
    // Route::get('add-view', [App\Http\Controllers\HomeController::class, 'addView']);
    Route::get('add', [App\Http\Controllers\MeetingController::class, 'add']);

});
