<?php

namespace Database\Factories\Domains\Game\Models;

use App\Domains\Game\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GameFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'home_team_id' => rand(1, 4),
            'away_team_id' => rand(1, 4),
            'week_id' => rand(1, 6),
            'home_team_score' => rand(0, 5),
            'away_team_score' => rand(0, 5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
