<?php

namespace Tests\Feature;

use App\Domains\Game\Actions\SimulateGameAction;
use App\Domains\Game\Models\Game;
use App\Domains\Game\Repositories\Database\GameRepository;
use App\Domains\Standing\Models\Standing;
use App\Domains\Standing\Repositories\Database\StandingRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class GameSimulatorTest extends TestCase
{
    public StandingRepository $standingRepository;

    public GameRepository $gameRepository;

    protected function setUp(): void
    {
//        $this->standingRepository = $this->mock(StandingRepository::class, function (MockInterface $mock) {
//            $mock->shouldReceive('process')->once();
//        });
        $this->gameRepository = $this->getMockBuilder(GameRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        parent::setUp();
    }

    public function test_game_simulator_returns_a_successful_response()
    {
        $standingRepository = $this->partialMock(StandingRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('findByTeam')->once();
        });

        $standingRepository->expects($this->exactly(2));

//        $game = Game::factory()->create();
//        $gameSimulator = new SimulateGameAction($this->standingRepository, $this->gameRepository);
//        $gameSimulator->handle($game);
    }
}
