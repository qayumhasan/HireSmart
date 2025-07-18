<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('layouts.master');
});
Route::get('/{any}', function () {
    return view('layouts.master');
})->where('any', '.*');
