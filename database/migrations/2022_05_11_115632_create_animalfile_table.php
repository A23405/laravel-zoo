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
        Schema::create('animalfile', function (Blueprint $table) {
            $table->string('aid')->primary();
            $table->string('name');
            $table->string('species_');
            $table->string('sex');
            $table->date('birth');
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('species_')->references('species_')->on('speciesarchives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animalfile');
    }
};
