<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;


Route::group(['prefix' =>'api'],function(){
    //Route::get('/movies','MovieController@index');
    //Route::get('/movies/{movie}','MovieController@show');

    //Create
    //Route::post('/movies','MovieController@store');
    //UPDATE
    //Route::put('/movies/{movie}','MovieController@update');
    //DELETE
    //Route::delete('/movies/{movie}','MovieController@destroy');
    Route::apiResource('/movies','MovieController');
});
Route::get('/', function () {
    //return view('welcome');
    return "main";
});
