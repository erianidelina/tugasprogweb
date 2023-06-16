<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API untuk membaca data
Route::get('/mahasiswa/read', 'MhsAPIController@read');

//API untuk menambahkan data
Route::post('/mahasiswa/create', 'MhsAPIController@create');

//API untuk mengedit data
Route::post('/mahasiswa/update/{id}', 'MhsAPIController@update');

//API untuk menghapus data
Route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');

Route::post('/task/create', 'TaskAPIController@create');
Route::get('/task/read', 'TaskAPIController@read');
Route::post('/task/update/{id}', 'TaskAPIController@update');
Route::delete('task/delete/{id}', 'TaskAPIController@delete');