<?php

namespace App\Domains\Standing\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Standing
 * @package App\Domains\Standing\Models
 */
class Standing extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'points',
        'won',
        'lose',
        'draw',
        'played',
        'goal_drawn'
    ];

    /**
     * @param $goalDrawn
     */
    public function won($goalDrawn)
    {
        $this->played     += 1;
        $this->won        += 1;
        $this->points     += 3;
        $this->goal_drawn += $goalDrawn;
    }

    /**
     * @param $goalDrawn
     */
    public function lose($goalDrawn)
    {
        $this->played     += 1;
        $this->goal_drawn += -$goalDrawn;
        $this->lose       += 1;
    }


    public function draw()
    {
        $this->played += 1;
        $this->draw   += 1;
        $this->points += 1;
    }
}
