<?php

use Illuminate\Http\Request;
use App\Models\Test;

Route::get('index', 'TestController@show')->name('index'); 

Route::get('welcome', function(){
    return view('welcome');
})->name('registro');

Route::post('saveUser', 'TestController@saveUser');

Route::get('getUsers','TestController@getUsers');

Route::delete('users/{id}', function($id){
    return $id;
})->name('users.destroy');