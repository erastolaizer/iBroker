<?php

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

Route::get('/home', [
  'uses'=>'HomeController@index',
  'as'=>'home'
]);
Route::post('/login/custom',[
  'uses'=>'LoginController@login',
  'as'=>'login/custom'
]);
Route::get('/admin/dashboard',[
  'uses'=>'DashboardController@admin',
  'as'=>'admin/dashboard'
]);
Route::get('/burser/dashboard',[
  'uses'=>'DashboardController@burser',
  'as'=>'burser/dashboard'
]);
Route::get('/lipa_karo', [
  'uses'=>'KaroController@index',
  'as'=>'lipa_karo'
]);
Route::post('/lipa_karo', [
  'uses'=>'KaroController@create',
  'as'=>'lipa/karo'
]);
Route::get('/history', [
  'uses'=>'KaroController@history',
  'as'=>'history'
]);
