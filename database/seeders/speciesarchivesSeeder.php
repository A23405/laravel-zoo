<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\speciesarchives;

class speciesarchivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $speciesarchives = speciesarchives::create([
            'species_' =>'大熊猫',
            'name'=>'熊貓',
            'phylum_'=>'脊索動物門',
            'class_'=>'哺乳綱',
            'order_'=>'食肉目',
            'family_'=>'熊科',
            'genus_'=>'大熊猫屬',
            'body_type'=>'約160~180公分；約重80~125公斤',
            'scientific_name'=>'Ailuropoda melanoleuca',
            'feeding_habits'=>'主要食物是竹子、紅蘿蔔。野生的貓熊會吃草、野果、昆蟲、竹鼠、羊。',
            'feature'=>'體型肥胖，頭大而圓，體色黑白分明。頭部眼睛周圍、耳朵和鼻子為黑色。',
            'distribution'=>'大陸的秦嶺南坡、岷山、邛崍山和大、小相嶺及涼山6個山系。',
            'conservation_level'=>'VU',
            'area'=>'亞洲動物區',
            'img'=>'',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' =>'虎',
            'name'=>'老虎',
            'phylum_'=>'脊索動物門',
            'class_'=>'哺乳綱',
            'order_'=>'食肉目',
            'family_'=>'貓科',
            'genus_'=>'豹屬',
            'body_type'=>'體長約160-390公分，體重約108-261公斤',
            'scientific_name'=>'Panthera tigris',
            'feeding_habits'=>'大多捕食大型和中型的動物。',
            'feature'=>'在白色到橘黃色的毛皮上有黑色垂直的條紋。',
            'distribution'=>'西至裏海和土耳其，東至俄羅斯和中國東南沿海，北至西伯利亞，南至印度尼西亞的爪哇島、峇里島和蘇門答臘島都有虎棲息分布。',
            'conservation_level'=>'EN',
            'area'=>'亞洲動物區',
            'img'=>'',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' =>'亞洲黑熊',
            'name'=>'臺灣黑熊',
            'phylum_'=>'脊索動物門',
            'class_'=>'哺乳綱',
            'order_'=>'食肉目',
            'family_'=>'熊科',
            'genus_'=>'熊屬',
            'body_type'=>'體長120~180公分，肩寬60~70公分，可達250公斤',
            'scientific_name'=>'Ursus thibetanus formosanus',
            'feeding_habits'=>'以植物性食物為主。所吃的食物類別繁雜，包括各種植物、昆蟲、動物等。',
            'feature'=>'牠的頷部末端是白色的，在胸口有黃色或白色毛呈V字型。',
            'distribution'=>'台灣中央山脈',
            'conservation_level'=>'VU',
            'area'=>'亞洲動物區',
            'img'=>'',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' =>'臺灣獼猴',
            'name'=>'臺灣獼猴',
            'phylum_'=>'脊索動物門',
            'class_'=>'哺乳綱',
            'order_'=>'靈長目',
            'family_'=>'猴科',
            'genus_'=>'獼猴屬',
            'body_type'=>'體長約50-60cm，體重5-12公斤',
            'scientific_name'=>'Macaca cyclopis',
            'feeding_habits'=>'以果實為主要食物來源。',
            'feature'=>'頭圓，臉扁，額裸出，顏面呈淡紫色，或深或淡。',
            'distribution'=>'分布於臺灣由海平面至海拔三千公尺以下的地區。',
            'conservation_level'=>'LC',
            'area'=>'亞洲動物區',
            'img'=>'',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' =>'亞洲象',
            'name'=>'大象',
            'phylum_'=>'脊索動物門',
            'class_'=>'哺乳綱',
            'order_'=>'長鼻目',
            'family_'=>'象科',
            'genus_'=>'亞洲象屬',
            'body_type'=>'長到2-4公尺高，重量可達3000-5000公斤',
            'scientific_name'=>'Elephas maximus',
            'feeding_habits'=>'主食竹笋、嫩叶、野芭蕉和棕叶芦等。',
            'feature'=>'耳朵比較小、較圓，頭骨有兩個突起，背脊拱起。',
            'distribution'=>'以南、南亞、東南亞以至中國西南邊境的熱帶及亞熱帶地區。',
            'conservation_level'=>'EN',
            'area'=>'亞洲動物區',
            'img'=>'',
        ]);
    }
}
