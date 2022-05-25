<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\area;

class areasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $area = area::create([
        'pid'=>'A',
        'name'=>'亞洲動物區',
        'introduction'=>'亞洲東部有鹿、浣熊、黑熊、熊貓、虎和猴子；亞洲南部有亞洲象、犀牛、豹、長 臂猿、鱷魚、眼鏡蛇和孔雀。在季风气 候的长期影响下，这些动物的适应能力 都很强。',
        'img'=>'',
    ]);
    $area = area::create([
        'pid'=>'B',
        'name'=>'沙漠動物區',
        'introduction'=>'沙漠中生存常見的動物有：駱駝、老鼠、蜥蜴、蛇,。駱駝在駝峰中含有大量的脂肪，脂肪氧化可以放出大量的能量，同時也可以產生大量的水，能量用於身體的消耗，水分用於身體的利用。',
        'img'=>'',
    ]);
    $area = area::create([
        'pid'=>'C',
        'name'=>'澳洲動物區',
        'introduction'=>'澳洲是公認的自然天堂，據統計澳洲擁有超過 378 種哺乳類動物、828 種鳥類、4,000 種魚類、300 種蜥蜴、140 種蛇類、兩種鱷魚，以及約 50 種的海洋哺乳類動物。其中超過八成的植物、哺乳類、爬蟲類和蛙類是澳洲特有的品種。',
        'img'=>'',
    ]);
    $area = area::create([
        'pid'=>'D',
        'name'=>'雨林動物區',
        'introduction'=>'熱帶雨林擁有豐富的生物多樣性，地球上近40% 至75% 的所有物種都棲息在這些森林中。 這些熱帶雨林的動物群包括美洲虎、貘、霍加皮、蟒蛇、非洲灰鸚鵡、龍骨嘴巨嘴…。',
        'img'=>'',
    ]);
    $area = area::create([
        'pid'=>'E',
        'name'=>'非洲動物區',
        'introduction'=>'非洲有熱帶大陸之稱。熱量充足，降水充沛，有廣大的森林和草原，為動物提供食物和棲息地。生活在這裡的野生動物有近2百種大型哺乳動物就有7百~8百萬頭，其中有許多非洲特有的珍稀種類。',
        'img'=>'',
    ]);
    }
}
