<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/addbuku', function () {
    return view('addbuku');
});
Route::resource('user', PerpusController::class);
Route::get('/a', 'App\Http\Controllers\PerpusController@show');

Route::get('/edit/{id}', 'App\Http\Controllers\PerpusController@edit');
Route::post('/add_process', 'App\Http\Controllers\PerpusController@add_process');

Route::get('/buku', 'App\Http\Controllers\PerpusController@show_by_admin');
Route::post('/edit_process', 'App\Http\Controllers\PerpusController@edit_process');
Route::get('/delete/{id}', 'App\Http\Controllers\PerpusController@delete');