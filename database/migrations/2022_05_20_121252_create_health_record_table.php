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
        Schema::create('health_record', function (Blueprint $table) {
            $table->id();
            $table->string('aid');
            $table->string('body_length');
            $table->string('weight');
            $table->string('estrus'); //發情
            $table->string('other');
            $table->timestamps();

            $table->foreign('aid')->references('aid')->on('animalfiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_record');
    }
};
