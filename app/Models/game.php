<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = [
        'name',
        'type',
    ];

    public function characters():HasMany
    {
        return $this->hasMany(Character::class,'game_id');
    }
}
