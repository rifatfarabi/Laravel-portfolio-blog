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
Route::get('/admin/main', 'App\Http\Controllers\MainPagesController@index')->name('admin.main');
Route::put('/admin/main', 'App\Http\Controllers\MainPagesController@update')->name('admin.main.update');
Route::get('/admin/service/create', 'App\Http\Controllers\ServicePagesController@create')->name('admin.service.create');
Route::post('/admin/service/create', 'App\Http\Controllers\ServicePagesController@store')->name('admin.service.store');
Route::get('/admin/service/list', 'App\Http\Controllers\ServicePagesController@list')->name('admin.service.list');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
