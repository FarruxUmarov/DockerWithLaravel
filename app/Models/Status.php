<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory;

    const int ACTIVE = 1;
    const int INACTIVE = 2;

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
