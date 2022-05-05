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

Route::get('register_contestant', 'WebsiteController@register');
Route::post('register', 'WebsiteController@do_register');
Route::post('register', 'WebsiteController@do_register');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('contests', 'AdminController@contests');
    Route::get('create_contest', 'AdminController@create_contest');
    Route::post('create_contest', 'AdminController@save_contest');
    Route::get('edit_contest/{uuid}', 'AdminController@edit_contest');
    Route::post('update_contest', 'AdminController@update_contest');
    Route::get('create_contestant/{uuid}', 'AdminController@create_contestant');
    Route::get('edit_contestant/{uuid}', 'AdminController@edit_contestant');
    Route::post('update_contestant', 'AdminController@update_contestant');
    Route::post('do_create_contestant', 'AdminController@do_create_contestant');
    Route::get('contestants/{uuid}', 'AdminController@contestants');
});

Route::get('contestants', 'WebsiteController@contestants');

require __DIR__ . '/auth.php';
