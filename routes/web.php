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

Route::get('/', function () {
    return view('welcome');
});

// Route Vaksinasi
Route::get('/data-vaksinasi', 'VaccinationController@index')->name('data-vaksinasi');
Route::get('/create-vaksinasi', 'VaccinationController@create')->name('create-vaksinasi');
Route::post('/save-vaksinasi', 'VaccinationController@store')->name('save-vaksinasi');
Route::get('/edit-vaksinasi/{id}', 'VaccinationController@edit')->name('edit-vaksinasi');
Route::post('/update-vaksinasi/{id}', 'VaccinationController@update')->name('update-vaksinasi');
Route::get('/delete-vaksinasi/{id}', 'VaccinationController@destroy')->name('delete-vaksinasi');

// Route List RS Rujukan
Route::get('/list-hospital', 'HospitalListController@index')->name('list-hospital');
