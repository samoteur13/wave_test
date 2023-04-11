<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agency extends Model
{
    use HasFactory;

    public function Compagny(): BelongsTo
    {
        return $this->belongsTo(Compagny::class);
    }
}
