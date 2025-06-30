<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $user = User::create([
        'name' => 'Dummy User',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('password'), // Always hash passwords
    ]);

    return response()->json([
        'message' => 'Dummy user created',
        'user' => $user,
    ]);
});
