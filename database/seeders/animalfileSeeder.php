<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animalfile;

class animalfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //A亞洲
        $animalfile = Animalfile::create([
            'aid' => 'A1001',
            'name' => '亨利',
            'species_' => '大熊猫',
            'sex' => 'M',
            'birth' => '2020-06-20',
            'img' => '/storage/img/亨利.png',
        ]);
        $animalfile = Animalfile::create([
            'aid' => 'A1002',
            'name' => '滾滾',
            'species_' => '大熊猫',
            'sex' => 'F',
            'birth' => '2021-01-20',
            'img' => '/storage/img/滾滾.jpg',
        ]);
        $animalfile = Animalfile::create([
            'aid' => 'A2001',
            'name' => '安妮',
            'species_' => '虎',
            'sex' => 'F',
            'birth' => '2019-01-10',
            'img' => '',
        ]);
        $animalfile = Animalfile::create([
            'aid' => 'A3001',
            'name' => '拉拉',
            'species_' => '亞洲黑熊',
            'sex' => 'F',
            'birth' => '2018-03-18',
            'img' => '',
        ]);
        $animalfile = Animalfile::create([
            'aid' => 'A4001',
            'name' => '奧克利',
            'species_' => '臺灣獼猴',
            'sex' => 'M',
            'birth' => '2015-07-23',
            'img' => '',
        ]);
        $animalfile = Animalfile::create([
            'aid' => 'A5001',
            'name' => '威廉',
            'species_' => '亞洲象',
            'sex' => 'M',
            'birth' => '2017-02-16',
            'img' => '',
        ]);
        //B沙漠
        $animalfile = Animalfile::create([
            'aid' => 'B9001',
            'name' => '菲菲',
            'species_' => '單峰駱駝',
            'sex' => 'F',
            'birth' => '2013-11-28',
            'img' => '',
        ]);
        //C澳洲
        $animalfile = Animalfile::create([
            'aid' => 'C6001',
            'name' => '克洛伊',
            'species_' => '無尾熊',
            'sex' => 'F',
            'birth' => '2012-09-06',
            'img' => '',
        ]);
        //D雨林
        $animalfile = Animalfile::create([
            'aid' => 'D8001',
            'name' => '露西',
            'species_' => '水豚',
            'sex' => 'F',
            'birth' => '2021-04-25',
            'img' => '',
        ]);
        //E非洲
        $animalfile = Animalfile::create([
            'aid' => 'E7001',
            'name' => '珍妮',
            'species_' => '髯羊',
            'sex' => 'F',
            'birth' => '2009-08-29',
            'img' => '',
        ]);
    }
}
