<?php

namespace App\Domains\Standing\Repositories;

use App\Repositories\BaseRepository;

interface StandingRepository extends BaseRepository
{
    public function findByTeam($id);
}
