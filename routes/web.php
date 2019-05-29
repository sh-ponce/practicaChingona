<?php

use Illuminate\Http\Request;
use App\Models\Test;

Route::get('index', function(){
    return view('index');
})->name('index');

Route::get('welcome', function(){
    return view('welcome');
})->name('registro');

Route::post('saveUser', 'TestController@saveUser');
