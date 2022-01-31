<?php

use Illuminate\Support\Facades\Route;



Route::get('/',  'HomeController@home') -> name('home');
Route::get('/filmdetails/details/{id}',  'HomeController@details') -> name('details');
Route::get('/create',  'HomeController@create') -> name('create');

Route::post('/store',  'HomeController@store') -> name('store');
    