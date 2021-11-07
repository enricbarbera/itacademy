<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->foreignId('user_id')->constrained();
        // });
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('team_1_id');
            // $table->unsignedBigInteger('team_2_id');

            // $table->foreign('team_1_id')->references('id')->on('teams')->onDelete('cascade');
            // $table->foreign('team_2_id')->references('id')->on('teams')->onDelete('cascade');

            $table->timestamp('when');
            $table->string('place')->nullable();

            $table->foreignId('team_1_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreignId('team_2_id')->references('id')->on('teams')->onDelete('cascade');

            // $table->foreignId('team_1')->references('id')->on('teams')->onDelete('cascade');
            // $table->foreignId('team_2')->references('id')->on('teams')->onDelete('cascade');
            
            // NO FUNCIONA, BUSCA LA TAULA team_1s I team_2s
            // $table->foreignId('team_1_id')->constrained()->onDelete('cascade');
            // $table->foreignId('team_2_id')->constrained()->onDelete('cascade');

            // $table->foreignId('team_1')->references('name')->on('teams')->onDelete('cascade');
            // $table->foreignId('team_2')->references('name')->on('teams')->onDelete('cascade');

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
        Schema::dropIfExists('encounters');
    }
}
