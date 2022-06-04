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
        //亞洲===============================================================================
        $speciesarchives = speciesarchives::create([
            'species_' => '大熊猫',
            'name' => '熊貓',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '食肉目',
            'family_' => '熊科',
            'genus_' => '大熊猫屬',
            'body_type' => '約160~180公分；約重80~125公斤',
            'scientific_name' => 'Ailuropoda melanoleuca',
            'feeding_habits' => '主要食物是竹子、紅蘿蔔。野生的貓熊會吃草、野果、昆蟲、竹鼠、羊。',
            'feature' => '體型肥胖，頭大而圓，體色黑白分明。頭部眼睛周圍、耳朵和鼻子為黑色。',
            'distribution' => '大陸的秦嶺南坡、岷山、邛崍山和大、小相嶺及涼山6個山系。',
            'conservation_level' => 'VU',
            'area' => '亞洲動物區',
            'img' => '',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' => '虎',
            'name' => '老虎',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '食肉目',
            'family_' => '貓科',
            'genus_' => '豹屬',
            'body_type' => '體長約160-390公分，體重約108-261公斤',
            'scientific_name' => 'Panthera tigris',
            'feeding_habits' => '大多捕食大型和中型的動物。',
            'feature' => '在白色到橘黃色的毛皮上有黑色垂直的條紋。',
            'distribution' => '西至裏海和土耳其，東至俄羅斯和中國東南沿海，北至西伯利亞，南至印度尼西亞的爪哇島、峇里島和蘇門答臘島都有虎棲息分布。',
            'conservation_level' => 'EN',
            'area' => '亞洲動物區',
            'img' => '',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' => '亞洲黑熊',
            'name' => '臺灣黑熊',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '食肉目',
            'family_' => '熊科',
            'genus_' => '熊屬',
            'body_type' => '體長120~180公分，肩寬60~70公分，可達250公斤',
            'scientific_name' => 'Ursus thibetanus formosanus',
            'feeding_habits' => '以植物性食物為主。所吃的食物類別繁雜，包括各種植物、昆蟲、動物等。',
            'feature' => '牠的頷部末端是白色的，在胸口有黃色或白色毛呈V字型。',
            'distribution' => '台灣中央山脈',
            'conservation_level' => 'VU',
            'area' => '亞洲動物區',
            'img' => '',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' => '臺灣獼猴',
            'name' => '臺灣獼猴',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '靈長目',
            'family_' => '猴科',
            'genus_' => '獼猴屬',
            'body_type' => '體長約50-60cm，體重5-12公斤',
            'scientific_name' => 'Macaca cyclopis',
            'feeding_habits' => '以果實為主要食物來源。',
            'feature' => '頭圓，臉扁，額裸出，顏面呈淡紫色，或深或淡。',
            'distribution' => '分布於臺灣由海平面至海拔三千公尺以下的地區。',
            'conservation_level' => 'LC',
            'area' => '亞洲動物區',
            'img' => '',
        ]);

        $speciesarchives = speciesarchives::create([
            'species_' => '亞洲象',
            'name' => '大象',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '長鼻目',
            'family_' => '象科',
            'genus_' => '亞洲象屬',
            'body_type' => '長到2-4公尺高，重量可達3000-5000公斤',
            'scientific_name' => 'Elephas maximus',
            'feeding_habits' => '主食竹笋、嫩叶、野芭蕉和棕叶芦等。',
            'feature' => '耳朵比較小、較圓，頭骨有兩個突起，背脊拱起。',
            'distribution' => '以南、南亞、東南亞以至中國西南邊境的熱帶及亞熱帶地區。',
            'conservation_level' => 'EN',
            'area' => '亞洲動物區',
            'img' => '',
        ]);

        //澳洲===============================================================================
        $speciesarchives = speciesarchives::create([
            'species_' => '無尾熊',
            'name' => '無尾熊',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '雙門齒目',
            'family_' => '無尾熊科',
            'genus_' => '無尾熊屬',
            'body_type' => '體長約70至80公分，體重8至15公斤',
            'scientific_name' => 'Phascolarctos cinereus',
            'feeding_habits' => '大多為尤加利樹樹葉。',
            'feature' => '一身濃密灰褐色短毛，胸部、腹部、四肢內側和內耳皮毛呈灰白色，生有一對大耳朵，鼻子裸露且扁平，沒有尾巴。',
            'distribution' => '澳洲的東部昆士蘭州、新南威爾斯、南澳大利亚州和維多利亞地區低海拔、不密集的桉樹林中。',
            'conservation_level' => 'VU',
            'area' => '澳洲動物區',
            'img' => '',
        ]);
        //非洲===============================================================================
        $speciesarchives = speciesarchives::create([
            'species_' => '髯羊',
            'name' => '巴巴里羊',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '偶蹄目',
            'family_' => '牛科',
            'genus_' => '髯羊屬',
            'body_type' => '肩高80-100厘米，體重40~140公斤',
            'scientific_name' => 'Ammotragus lervia',
            'feeding_habits' => '以沙漠邊緣地區的雜草、矮灌木等為食。',
            'feature' => '毛色為黃褐色偏紅色，耳內、臉頰、腹側及四肢內側為白色，雄羊脖子下面由喉部一直到前腿有長而柔軟的鬃毛，雌雄均有角，雄性的角先向外長，再向內偏轉。',
            'distribution' => '非洲北部山區',
            'conservation_level' => 'VU',
            'area' => '非洲動物區',
            'img' => '',
        ]);
        //雨林===============================================================================
        $speciesarchives = speciesarchives::create([
            'species_' => '水豚',
            'name' => '水豚',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '齧齒目',
            'family_' => '豚鼠科',
            'genus_' => '水豚屬',
            'body_type' => '體長可達107至134公分，一般重45公斤',
            'scientific_name' => 'Hydrochoerus hydrochaeris',
            'feeding_habits' => '主要以草、水生植物、樹皮和果實為食。',
            'feature' => '外表上很像超大型的豚鼠。',
            'distribution' => '巴西、巴拉圭、委內瑞拉的河、湖泊、窪地和森林中植物豐盛的池塘、溪流邊和沼澤地，一般棲息於植物繁茂的沼澤地中',
            'conservation_level' => 'LC',
            'area' => '雨林動物區',
            'img' => '',
        ]);
        //沙漠===============================================================================
        $speciesarchives = speciesarchives::create([
            'species_' => '單峰駱駝',
            'name' => '單峰駱駝',
            'phylum_' => '脊索動物門',
            'class_' => '哺乳綱',
            'order_' => '偶蹄目',
            'family_' => '駱駝科',
            'genus_' => '駱駝屬',
            'body_type' => '長達10尺，高達6到7尺，重1000至1500磅。',
            'scientific_name' => 'Camelus dromedarius',
            'feeding_habits' => '以沙漠中的植物為食。',
            'feature' => '只有一個駝峰。毛色為深棕色到暗灰色，頭頸部長，尾巴短，眼睫毛濃密，耳朵小，上唇深裂，鼻孔扁平呈細縫狀，蹄寬大呈扇狀身軀高大，背毛豐厚。',
            'distribution' => '北非洲和西亞洲、印度等熱帶地區',
            'conservation_level' => 'NE',
            'area' => '沙漠動物區',
            'img' => '',
        ]);
    }
}
