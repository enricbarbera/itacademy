<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Team;

class Encounter extends Model
{
    use HasFactory;

    public function team_1()
    {
        return $this->belongsTo(Team::class);
    }

    public function team_2()
    {
        return $this->belongsTo(Team::class);
    }
}
