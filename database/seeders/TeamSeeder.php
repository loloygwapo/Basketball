<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Player;

class TeamSeeder extends Seeder
{
    public function run()
    {
        Team::factory()
            ->count(10)
            ->has(Player::factory()->count(5))
            ->create();
    }
}

