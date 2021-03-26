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
Route::post('/student','StudentController@createStudent');
Route::get('/student/edit/{id}','StudentController@getStudent');
Route::get('/student','StudentController@getAllStudent');
Route::put('/student/update/{id}','StudentController@updateStudent');
Route::post('/student/delete/{id}','StudentController@deleteStudent');


Route::group([
    'prefix'=>'auth'
],function(){
    Route::post('login','AuthController@login');
    Route::post('signup','AuthController@signup');


Route::group([
    'middleware'=>'auth:api'
],function(){
    Route::get('logout','AuthController@logout');
    Route::get('user','AuthController@user');

});
});