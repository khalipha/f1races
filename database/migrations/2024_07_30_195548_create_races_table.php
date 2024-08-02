<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('RaceId');
            $table->string('RaceName');
            $table->string('RaceTime');
            $table->string('RaceCoordinator')->nullable();
            $table->string('PodiumPositions')->nullable();
            $table->string('Results')->nullable();
            $table->integer('TeamId')->nullable();
            $table->integer('EventId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
