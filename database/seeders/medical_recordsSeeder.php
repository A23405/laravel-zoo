<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\medical_record;

class medical_recordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medical_record = medical_record::create([
            'aid'=>'A1001',
            'medical_location'=>'中科獸醫',
            'reason'=>'樹上摔落，右前臂擦傷',
        ]);
    }
}
