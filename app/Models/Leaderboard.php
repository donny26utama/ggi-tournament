<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leaderboard extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'game_id',
        'user_id',
        'score',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
