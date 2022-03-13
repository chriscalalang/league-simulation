<?php

namespace Database\Factories\Domains\Standing\Models;

use App\Domains\Standing\Models\Standing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StandingFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Standing::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'team_id' => rand(1, 4),
            'points' => rand(0, 5),
            'played' => rand(1, 3),
            'won' => rand(0, 3),
            'lose' => rand(0, 3),
            'draw' => rand(0, 3),
            'goal_drawn' => rand(0, 3)
        ];
    }
}
