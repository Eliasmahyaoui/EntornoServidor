<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anime extends Model
{

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
