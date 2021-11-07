<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Encounter;
use App\Models\Player;

class Team extends Model
{
    use HasFactory;

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
