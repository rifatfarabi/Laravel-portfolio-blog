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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('Home');
Route::get('/admin/dashboard', 'App\Http\Controllers\PagesController@dashboard')->name('admin.dashboard');
Route::get('/admin/main', 'App\Http\Controllers\PagesController@main')->name('admin.main');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
