<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
   return view('layouts.master');
});
Route::get('/{any}', function () {
    return view('layouts.master');
})->where('any', '.*');
