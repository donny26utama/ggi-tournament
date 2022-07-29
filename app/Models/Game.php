<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'tournament_id',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function leaderboard()
    {
        return $this->hasMany(Leaderboard::class);
    }
}
