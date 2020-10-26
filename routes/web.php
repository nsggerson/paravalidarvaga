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
    return view('modelos');
});

Route::get('/','CarroController@index');
//Route::get('/templates/modelos','CarroController@modelos');
Route::get('/templates/{id}/modelos','CarroController@modelos');
Route::get('/templates/{id}/produtos','CarroController@produtos');
Route::get('/build/build','CarroController@build');
//Route::get('externo/{token}', array('as' => 'admin.externo', 'uses' => 'LoginController@getAdminExterno'))->middleware('externo');
