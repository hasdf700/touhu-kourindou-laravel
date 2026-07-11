<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'name' => '臺北市', 'sort' => 0, 'state' => 0],
            ['id' => 2, 'name' => '基隆市', 'sort' => 0, 'state' => 0],
            ['id' => 3, 'name' => '新北市', 'sort' => 0, 'state' => 0],
            ['id' => 4, 'name' => '宜蘭縣', 'sort' => 0, 'state' => 0],
            ['id' => 5, 'name' => '新竹市', 'sort' => 0, 'state' => 0],
            ['id' => 6, 'name' => '新竹縣', 'sort' => 0, 'state' => 0],
            ['id' => 7, 'name' => '桃園市', 'sort' => 0, 'state' => 0],
            ['id' => 8, 'name' => '苗栗縣', 'sort' => 0, 'state' => 0],
            ['id' => 9, 'name' => '台中市', 'sort' => 0, 'state' => 0],
            ['id' => 10, 'name' => '彰化縣', 'sort' => 0, 'state' => 0],
            ['id' => 11, 'name' => '南投縣', 'sort' => 0, 'state' => 0],
            ['id' => 12, 'name' => '雲林縣', 'sort' => 0, 'state' => 0],
            ['id' => 13, 'name' => '嘉義市', 'sort' => 0, 'state' => 0],
            ['id' => 14, 'name' => '嘉義縣', 'sort' => 0, 'state' => 0],
            ['id' => 15, 'name' => '台南市', 'sort' => 0, 'state' => 0],
            ['id' => 16, 'name' => '高雄市', 'sort' => 0, 'state' => 0],
            ['id' => 17, 'name' => '南海諸島', 'sort' => 0, 'state' => 0],
            ['id' => 18, 'name' => '澎湖縣', 'sort' => 0, 'state' => 0],
            ['id' => 19, 'name' => '屏東縣', 'sort' => 0, 'state' => 0],
            ['id' => 20, 'name' => '台東縣', 'sort' => 0, 'state' => 0],
            ['id' => 21, 'name' => '花蓮縣', 'sort' => 0, 'state' => 0],
            ['id' => 22, 'name' => '金門縣', 'sort' => 0, 'state' => 0],
            ['id' => 23, 'name' => '連江縣', 'sort' => 0, 'state' => 0],
        ];

        DB::table('cities')->insert($rows);
    }
}
