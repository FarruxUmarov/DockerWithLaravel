<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/user', function (Request $request) {
    $user = User::query()->create([
        'name' => 'Farrux',
        'email' => 'farrux093@gmail.com',
        'password' => Hash::make('farrux'),
    ]);

    $token = $user->createToken('MyApp')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
