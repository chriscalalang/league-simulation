<?php

namespace App\Providers;

use App\Domains\Game\Repositories\GameRepository;
use App\Domains\Standing\Repositories\StandingRepository;
use App\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepository::class, \App\Repositories\Database\BaseRepository::class);
        $this->app->bind(GameRepository::class, \App\Domains\Game\Repositories\Database\GameRepository::class);
        $this->app->bind(StandingRepository::class, \App\Domains\Standing\Repositories\Database\StandingRepository::class);
    }
}
