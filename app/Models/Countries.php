<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Countries extends Model
{
    use HasFactory;

    /**
     * Get the phone associated with the user.
     */
    public function person(): HasMany
    {
        return $this->hasMany(Persons::class);
    }

}
