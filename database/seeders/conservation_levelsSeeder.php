<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\conservation_level;

class conservation_levelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conservation_level = conservation_level::create([
            'id'=>'EX',
            'content'=>'滅絕（Extinct, EX）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'EW',
            'content'=>'野外滅絕（Extinct In the Wild, EW）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'CR',
            'content'=>'極危（Critically Endangered, CR）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'EN',
            'content'=>'瀕危（Endangered, EN）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'VU',
            'content'=>'易危（Vulnerable, VU）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'NT',
            'content'=>'接近受威脅（Near Threatened, NT）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'LC',
            'content'=>'暫無危機（Least Concern, LC）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'DD',
            'content'=>'資料不足（Data Deficient, DD）',
        ]);
        $conservation_level = conservation_level::create([
            'id'=>'NE',
            'content'=>'未評估（Not Evaluated, NE）',
        ]);
    }
}
