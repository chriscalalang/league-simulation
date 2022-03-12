<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_team_id');
            $table->unsignedBigInteger('away_team_id');
            $table->unsignedBigInteger('week_id');
            $table->integer('home_team_score');
            $table->integer('away_team_score');
            $table->timestamps();
        });

        Schema::table('matches', function(Blueprint $table) {
            $table->foreign('home_team_id')
                ->references('id')
                ->on('teams');

            $table->foreign('away_team_id')
                ->references('id')
                ->on('teams');

            $table->foreign('week_id')
                ->references('id')
                ->on('weeks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
