<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'name' => '同人本'],
            ['id' => 2, 'name' => '小說'],
            ['id' => 3, 'name' => '明信片'],
            ['id' => 4, 'name' => '海報'],
            ['id' => 5, 'name' => '貼紙'],
            ['id' => 6, 'name' => '壓克力鑰匙圈'],
            ['id' => 7, 'name' => '壓克力立牌'],
            ['id' => 8, 'name' => '壓克力磚'],
            ['id' => 9, 'name' => '音樂'],
            ['id' => 10, 'name' => '遊戲'],
            ['id' => 11, 'name' => '模型'],
            ['id' => 12, 'name' => 'fumo'],
        ];

        DB::table('categories')->insert($rows);
    }
}
