<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persons extends Model
{
    use HasFactory;

    protected $table = 'persons';

    public function country(): BelongsTo
    {
        return $this->belongsTo(Countries::class, 'countries_id');
    }

}
