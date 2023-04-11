<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compagny extends Model
{
    use HasFactory;

    public function agencies(): HasMany
    {
        return $this->hasMany(Agency::class);
    }
}
