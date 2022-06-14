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
        $health_record = health_record::create([
            'aid'=>'A1002',
            'body_length'=>'0.5m',
            'weight'=>'20kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'A2001',
            'body_length'=>'2m',
            'weight'=>'200kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'A3001',
            'body_length'=>'1.5m',
            'weight'=>'230kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'A4001',
            'body_length'=>'0.5m',
            'weight'=>'10kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'A5001',
            'body_length'=>'0.3m',
            'weight'=>'3500kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'B9001',
            'body_length'=>'1.82m',
            'weight'=>'500kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'C6001',
            'body_length'=>'0.75m',
            'weight'=>'12kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'D8001',
            'body_length'=>'1.2m',
            'weight'=>'40kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
        $health_record = health_record::create([
            'aid'=>'E7001',
            'body_length'=>'0.9m',
            'weight'=>'120kg',
            'estrus'=>'未發情',
            'other'=>'正常無異狀',
        ]);
    }
}
