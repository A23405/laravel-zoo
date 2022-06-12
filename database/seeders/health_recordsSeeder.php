<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\health_record;

class health_recordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $health_record = health_record::create([
            'aid'=>'A1001',
            'body_length'=>'1.65m',
            'weight'=>'110kg',
            'estrus'=>'發情中',
            'other'=>'正常',
        ]);
    }
}
