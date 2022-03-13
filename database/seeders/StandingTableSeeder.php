<?php

namespace Database\Seeders;

use App\Domains\Standing\Models\Standing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Standing::factory(50)->create();
    }
}
