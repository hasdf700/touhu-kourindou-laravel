<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'code' => 'th06', 'name' => '東方紅魔鄉', 'release_year' => 2002, 'description' => '正式轉戰 Windows 平台的里程碑之作。蕾米莉亞、咲夜、帕秋莉初登場，引爆現象級的二創狂潮。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'code' => 'th07', 'name' => '東方妖妖夢', 'release_year' => 2003, 'description' => '魂魄妖夢、西行寺幽幽子、八雲紫首次亮相。構築出櫻花漫天與生死交織的幽美世界觀。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'code' => 'th07.5', 'name' => '東方萃夢想', 'release_year' => 2004, 'description' => '與黃昏邊境合作開發的第一款彈幕格鬥遊戲，圍繞著幻想鄉無盡宴會異變與伊吹萃香的登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'code' => 'th08', 'name' => '東方永夜抄', 'release_year' => 2004, 'description' => '圍繞著消失之月的永夜物語。人氣角色蓬萊山輝夜、藤原妹紅於此作震撼登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'code' => 'th09', 'name' => '東方花映塚', 'release_year' => 2005, 'description' => '引發幻想鄉大結界內百花齊放的異變。採用雙人對戰彈幕模式，四季映姬與小野塚小町於此作初登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'code' => 'th09.5', 'name' => '東方文花帖', 'release_year' => 2005, 'description' => '以天狗記者射命丸文為主角的獨特相機彈幕遊戲，開創捕捉彈幕拍照的全新玩法。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'code' => 'th10', 'name' => '東方風神錄', 'release_year' => 2007, 'description' => '舞台轉移至充滿神祕色彩的妖怪之山。守矢神社的八坂神奈子與洩矢諏訪子初次現身。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'code' => 'th10.5', 'name' => '東方緋想天', 'release_year' => 2008, 'description' => '引入了天氣變幻莫測的戰鬥系統，以天界引發的氣候異變與比那名居天子為核心。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'code' => 'th11', 'name' => '東方地靈殿', 'release_year' => 2008, 'description' => '潛入被遺忘的漆黑地底都市。擁有讀心能力的古明地覺與古明地戀姊妹初次登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'code' => 'th12', 'name' => '東方星蓮船', 'release_year' => 2009, 'description' => '翱翔於天際的幻想飛船之旅。聖白蓮、村紗水蜜等充滿佛教與妖怪色彩的角色在此登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'code' => 'th12.3', 'name' => '東方非想天則', 'release_year' => 2009, 'description' => '緋想天的超大型擴充作品，加入了巨大影子巨人的謎團，並新增多位高人氣角色參戰。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'code' => 'th12.5', 'name' => '東方文花帖', 'release_year' => 2010, 'description' => '文花帖的延續之作，新增姬海棠羽立作為可操作角色，帶來更多充滿挑戰性的新聞取材彈幕。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'code' => 'th12.8', 'name' => '妖精大戰爭 ～ 大妖精的激烈大戰爭', 'release_year' => 2010, 'description' => '以冰之妖精琪露諾為視角的特殊作品，具備獨特的凍結彈幕機制，展現妖精們的激烈大戰。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'code' => 'th13', 'name' => '東方神靈廟', 'release_year' => 2011, 'description' => '圍繞著渴望復活的幽靈與神靈。以道教聖者為背景的豐聰耳神子正式登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'code' => 'th13.5', 'name' => '東方心綺樓', 'release_year' => 2013, 'description' => '格鬥引擎全面革新為空中對戰模式，探討人心陷入宗教絕望與秦心面具暴走的心之異變。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'code' => 'th14', 'name' => '東方輝針城', 'release_year' => 2013, 'description' => '弱者與小人們掀起的下克上造反。手持萬寶槌的小人族末裔——少名針妙丸在此登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'code' => 'th14.3', 'name' => '彈幕天邪鬼', 'release_year' => 2014, 'description' => '反派天邪鬼鬼人正邪為了躲避追捕，利用各式各樣防禦道具打破不可能的彈幕結界。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'code' => 'th14.5', 'name' => '東方深秘錄', 'release_year' => 2015, 'description' => '以都市傳說具現化為主題，舞台橫跨幻想鄉與外界，首度引出月之都侵略的前哨戰。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'code' => 'th15', 'name' => '東方紺珠傳', 'release_year' => 2015, 'description' => '舞台延伸至凶險的月之都。以「純粹的夢境」為主題，帶來系列作中堪稱硬核的極高難度挑戰。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'code' => 'th15.5', 'name' => '東方憑依華', 'release_year' => 2018, 'description' => '以完全憑依精神結合為主題的雙人搭檔格鬥作，揭開依神姊妹引發的財富與災禍風暴。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'code' => 'th16', 'name' => '東方天空璋', 'release_year' => 2017, 'description' => '幻想鄉陷入失控的四季異變。狂氣的後戶之神與生命力洋溢的背後舞者天女們華麗登場。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'code' => 'th16.5', 'name' => '秘封噩夢日記', 'release_year' => 2018, 'description' => '噩夢世界中的宇佐見堇子利用智慧型手機對抗幻想鄉諸神與妖怪，展開寫真爭奪戰。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'code' => 'th17', 'name' => '東方鬼形獸', 'release_year' => 2019, 'description' => '借用畜生界野獸靈魂力量的獨特彈幕戰。狼、獺、雕等動物靈成為解開地獄異變的關鍵。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'code' => 'th17.5', 'name' => '東方剛欲異聞', 'release_year' => 2021, 'description' => '全新橫向流水彈幕動作遊戲，圍繞著地底黑水石油噴發與饕餮尤魔的霸權之爭。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'code' => 'th18', 'name' => '東方虹龍洞', 'release_year' => 2021, 'description' => '圍繞著神秘卡片的虹色異變。以黑市交易為核心的獨特系統，再次深深吸引全球粉絲。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'code' => 'th18.5', 'name' => '巴瓦爾黑市', 'release_year' => 2022, 'description' => '以虹龍洞卡片交易為背景的快節奏外傳，玩家將操作魔理沙在黑市中不斷收集與購入卡片。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'code' => 'th19', 'name' => '東方獸王園', 'release_year' => 2023, 'description' => '因市場開放而引發的土地所有權爭奪戰。經典的雙人對戰模式重出江湖，展開狂暴的野獸彈幕大亂鬥。', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'code' => 'th20', 'name' => '東方錦上京', 'release_year' => 2025, 'description' => '圍繞著華麗繁盛的「錦上京」展開的全新異變。更深邃的東方詩篇章在此拉開序幕。', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('games')->insert($rows);
    }
}
