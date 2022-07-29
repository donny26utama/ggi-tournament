<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'start_at',
        'end_at',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
