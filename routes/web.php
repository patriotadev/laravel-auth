<?php

use App\Http\Controllers\UserController;
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

Route::post('/ceklogin', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/', function () {
    return view('login');
});

Route::get('/guest', function () {
    return view('guest');
});

Route::group(['middleware' => 'LoginSession'], function () {

    Route::get('/user', function () {
        return view('user');
    });

    Route::get('/admin', function () {
        return view('admin');
    });
});
