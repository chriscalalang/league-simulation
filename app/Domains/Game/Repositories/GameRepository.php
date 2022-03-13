<?php

namespace App\Domains\Game\Repositories;

use App\Domains\Standing\Models\Standing;

/**
 * Interface MatchRepository
 * @package App\Domains\Game\Repositories
 */
interface GameRepository
{
    public function updateMatchScore(int $homeScore, int $awayScore, Standing $home, Standing $away);
}
