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
        Schema::create('speciesarchives', function (Blueprint $table) {
            $table->id();
            $table->string('species_')->unique();
            $table->string('name');//俗稱
            $table->string('phylum_');//門
            $table->string('class_');//綱
            $table->string('order_');//目
            $table->string('family_');//科
            $table->string('genus_');//屬
            $table->string('body_type');//體型
            $table->string('scientific_name');//學名
            $table->string('feeding_habits');//食性
            $table->string('conservation_level');//保育
            $table->string('area');//所在場區
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('area')->references('name')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciesarchives');
    }
};
