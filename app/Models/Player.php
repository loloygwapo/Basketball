<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position', 'team_id'];

    // A player belongs to a team
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}


