<?php
namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    protected $model = Player::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->randomElement(['Guard', 'Forward', 'Center']),
            'team_id' => \App\Models\Team::factory(),
        ];
    }
}

