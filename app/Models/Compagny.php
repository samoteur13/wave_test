<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Compagny extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];
    
    public function agencies(): HasMany
    {
        return $this->hasMany(Agency::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
