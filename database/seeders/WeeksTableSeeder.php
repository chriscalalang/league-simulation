<?php

namespace Database\Seeders;

use App\Domains\Week\Models\Week;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeeksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::insert([
            ['title' => '1st', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => '2nd', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => '3rd', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => '4th', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => '5th', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => '6th', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
