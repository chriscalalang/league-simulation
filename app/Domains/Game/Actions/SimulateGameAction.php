<?php

namespace App\Domains\Game\Actions;

use App\Domains\Game\Models\Game;
use App\Domains\Game\Repositories\GameRepository;
use App\Domains\Standing\Models\Standing;
use App\Domains\Standing\Repositories\StandingRepository;
use App\Domains\Team\Models\Team;

/**
 * Class SimulateGameAction
 * @package App\Domains\Game\Actions
 */
class SimulateGameAction
{
    private StandingRepository $standingRepository;
    private GameRepository $gameRepository;

    /**
     * SimulateGameAction constructor.
     * @param StandingRepository $standingRepository
     * @param GameRepository $gameRepository
     */
    public function __construct(StandingRepository $standingRepository, GameRepository $gameRepository)
    {
        $this->standingRepository = $standingRepository;
        $this->gameRepository = $gameRepository;
    }

    /**
     * @param Game $game
     * @return bool
     */
    public function handle(Game $game): bool
    {
        $home = $this->standingRepository->findByTeam($game->home_team_id);
        $away = $this->standingRepository->findByTeam($game->away_team_id);

        $homeScore = $this->generateScore(true, $home->id);
        $awayScore = $this->generateScore(false, $away->id);

        $this->updateMatchScore($homeScore, $awayScore, $home, $away);

        return $this->gameRepository->storeGameResult($game, $homeScore, $awayScore);
    }

    public function bulkSimulate($matches)
    {
        foreach ($matches as $match) {
            $this->simulate($match);
        }
    }

    public function updateMatchScore(int $homeScore, int $awayScore, Standing $home,Standing $away)
    {
        $this->gameRepository->updateMatchScore($homeScore, $awayScore, $home, $away);
    }

    /**
     * @param bool $is_home
     * @param int $teamRank
     * @return int
     */
    public function generateScore(bool $is_home, int $teamRank): int
    {
        //this generator is assuming home team and also current rank to generate result
        return $is_home ? rand(0, 10) : rand(0, 10 - $teamRank);
    }
}
