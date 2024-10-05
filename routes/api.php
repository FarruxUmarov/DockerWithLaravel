<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/user', [\App\Http\Controllers\ApiController::class, 'user']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
