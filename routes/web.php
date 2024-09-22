<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('home', function (){
    return view('home');
});

Route::get('aceite/show', function (){
    return view('aceite/show');
});
Route::get('aceite/create', function (){
    return view('aceite/create');
});