<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController
{
    public function user()
    {
        $user = User::query()->create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password')
        ]);

        $token = $user->createToken('token')->plainTextToken;
        return response()->json(['token' => $token]);
    }
}
