<?php

namespace App\Domains\Standing\Repositories\Database;

use App\Domains\Standing\Models\Standing;
use App\Repositories\Database\BaseRepository;
use Faker\Provider\Base;
use JetBrains\PhpStorm\Pure;

/**
 * Class StandingRepository
 * @package App\Domains\Standing\Repositories\Database
 */
class StandingRepository extends BaseRepository implements \App\Domains\Standing\Repositories\StandingRepository
{
    public Standing $standing;

    /**
     * StandingRepository constructor.
     * @param Standing $standing
     */
    public function __construct(Standing $standing)
    {
        parent::__construct($standing);
    }

    public function findByTeam($id)
    {;
        return $this->standing->where('team_id', $id)->first();
    }
}
