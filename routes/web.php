<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
   return view('layouts.master');
});
Route::get('/view', function () {
   return view('welcome');
});
Route::get('/{any}', function () {
    return view('layouts.master');
})->where('any', '.*');
