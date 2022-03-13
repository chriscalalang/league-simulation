<?php

namespace App\Repositories;

/**
 * Interface BaseRepostory
 * @package App\Repositories
 */
interface BaseRepository
{
    public function all();

    public function find($id);
}
