<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::post('register_contestant', 'WebsiteController@do_register');
Route::get('child_right', 'WebsiteController@child_right');
Route::get('body_part', 'WebsiteController@body_part');
Route::get('importance_of_child_right', 'WebsiteController@importance_of_child_right');
Route::get('child_trafficking', 'WebsiteController@child_trafficking');
Route::get('effect_of_bullying', 'WebsiteController@effect_of_bullying');
Route::get('terms_conditions', 'WebsiteController@terms_conditions');
Route::get('/', 'WebsiteController@welcome');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::post('payment_success', 'AdminController@payment_success');
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
    Route::get('close_current_stage/{uuid}', 'AdminController@close_current_stage');
    Route::get('download_records/{uuid}', 'AdminController@download_records');
    Route::get('count_down', 'AdminController@count_down');
    Route::post('count_down', 'AdminController@save_down');
    Route::get('bye', function(){
        Auth::logout();
    });
});

Route::get('contestants', 'WebsiteController@contestants');

require __DIR__ . '/auth.php';
