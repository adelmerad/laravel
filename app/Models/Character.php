<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    protected $fillable = [
        'name',
        'class',
        'level',
        'game_id'
    ];

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class,'game_id');
    }
}
