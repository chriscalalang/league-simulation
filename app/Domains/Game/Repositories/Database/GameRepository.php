<?php

namespace App\Domains\Game\Repositories\Database;

use App\Domains\Game\Models\Game;
use App\Domains\Standing\Models\Standing;
use App\Domains\Team\Models\Team;
use App\Domains\Week\Models\Week;

/**
 * Class GameRepository
 * @package App\Domains\Game\Repositories\Database
 */
class GameRepository implements \App\Domains\Game\Repositories\GameRepository
{
    protected $team;
    protected $game;
    protected $week;

    public function __construct(Team $team, Game $game, Week $week)
    {
        $this->team  = $team;
        $this->game = $game;
        $this->week  = $week;
    }

    /**
     * @param int $homeScore
     * @param int $awayScore
     * @param Standing $home
     * @param Standing $away
     */
    public function updateMatchScore(int $homeScore, int $awayScore, Standing $home, Standing $away)
    {
        $goalDrawn = abs($awayScore - $homeScore);

        if ($homeScore > $awayScore) {
            $home->won($goalDrawn);
            $away->lose($goalDrawn);

        } elseif ($awayScore > $homeScore) {
            $away->won($goalDrawn);
            $home->lose($goalDrawn);
        } else {
            $home->draw();
            $away->draw();
        }

        $home->save();
        $away->save();
    }

    /**
     * @param Game $game
     * @param $homeScore
     * @param $awayScore
     * @return bool
     */
    public function storeGameResult(Game $game, $homeScore, $awayScore): bool
    {
        $game->home_team_score = $homeScore;
        $game->away_team_score = $awayScore;
        $game->status         = 1;
        return $game->save();
    }
}
