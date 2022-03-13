<?php

namespace Database\Seeders;

use App\Domains\Team\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
            ['name' => 'Chelsea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Arsenal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Manchester City', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Liverpool', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
