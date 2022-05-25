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
        Schema::table('speciesarchives', function (Blueprint $table) {
            //
            $table->string('distribution')->after('feeding_habits');//分佈
            $table->string('feature')->after('feeding_habits');//特徵
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speciesarchives', function (Blueprint $table) {
            //
        });
    }
};
