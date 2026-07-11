<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'shop_id' => 1, 'category_id' => 7, 'name' => '壓克力立牌(靈夢)', 'image' => 'assets/img/products/chillneko/reimu_acrylic01.webp', 'info' => '寬X高(10x15)cm', 'price' => 420, 'is_open' => true, 'sort' => 1, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 2, 'shop_id' => 1, 'category_id' => 7, 'name' => '壓克力立牌(幽幽子)', 'image' => 'assets/img/products/chillneko/yuyuko_acrylic01.webp', 'info' => '寬X高(10x15)cm', 'price' => 420, 'is_open' => true, 'sort' => 3, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 3, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(靈夢)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_01.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 12, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 4, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(魔理沙)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_02.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 13, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 5, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(咲夜)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_03.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 14, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 6, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(妖夢)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_04.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 15, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 7, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(幽幽子)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_05.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 16, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 8, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(八雲紫)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_06.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 17, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 9, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(蕾米)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_07.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 18, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 10, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(芙蘭)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_08.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 19, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 11, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(帕秋莉)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_09.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 20, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 12, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(愛麗絲)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_10.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 21, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 13, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(琪露諾)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_11.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 22, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 14, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(鈴仙)', 'image' => 'assets/img/products/chillneko/store_ChillNeko03_12.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 23, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 15, 'shop_id' => 1, 'category_id' => 1, 'name' => '東方project同人本(靈夢)', 'image' => 'assets/img/products/chillneko/store_ChillNeko04.webp', 'info' => '16p全彩', 'price' => 100, 'is_open' => true, 'sort' => 24, 'created_at' => '2026-05-06 10:33:02', 'updated_at' => '2026-05-06 10:33:02'],
            ['id' => 16, 'shop_id' => 1, 'category_id' => 1, 'name' => '東方project同人本(魔理沙)', 'image' => 'assets/img/products/chillneko/store_ChillNeko05.webp', 'info' => '16p全彩', 'price' => 220, 'is_open' => true, 'sort' => 25, 'created_at' => '2026-05-06 10:33:02', 'updated_at' => '2026-05-06 10:33:02'],
            ['id' => 17, 'shop_id' => 1, 'category_id' => 5, 'name' => '油庫里貼紙', 'image' => 'assets/img/products/chillneko/store_ChillNeko06.webp', 'info' => 'A5全彩', 'price' => 50, 'is_open' => true, 'sort' => 27, 'created_at' => '2026-05-06 10:33:02', 'updated_at' => '2026-05-06 10:33:02'],
            ['id' => 18, 'shop_id' => 1, 'category_id' => 3, 'name' => '東方明信片四款一組', 'image' => 'assets/img/products/chillneko/store_ChillNeko07.webp', 'info' => '全彩', 'price' => 50, 'is_open' => true, 'sort' => 26, 'created_at' => '2026-05-06 10:33:02', 'updated_at' => '2026-05-06 10:33:02'],
            ['id' => 19, 'shop_id' => 1, 'category_id' => 7, 'name' => '壓克力立牌(戀戀)', 'image' => 'assets/img/products/chillneko/koishi_acrylic01.webp', 'info' => '寬X高(10x15)cm', 'price' => 420, 'is_open' => true, 'sort' => 2, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 20, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(戀戀)', 'image' => 'assets/img/products/chillneko/koishi_key.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 8, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 21, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(覺)', 'image' => 'assets/img/products/chillneko/satori_key.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 9, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 22, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(天子)', 'image' => 'assets/img/products/chillneko/tenshi_key.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 10, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 23, 'shop_id' => 1, 'category_id' => 6, 'name' => '壓克力鑰匙圈(文文)', 'image' => 'assets/img/products/chillneko/aya_key.webp', 'info' => '寬X高(5x5)cm', 'price' => 150, 'is_open' => true, 'sort' => 11, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 24, 'shop_id' => 1, 'category_id' => 8, 'name' => '壓克力磚(芙蘭)', 'image' => 'assets/img/products/chillneko/flandre_acrylic_tiles.webp', 'info' => '(10x15)cm', 'price' => 200, 'is_open' => true, 'sort' => 4, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 25, 'shop_id' => 1, 'category_id' => 8, 'name' => '壓克力磚(蕾米)', 'image' => 'assets/img/products/chillneko/remilia_acrylic_tiles.webp', 'info' => '(10x15)cm', 'price' => 200, 'is_open' => true, 'sort' => 5, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 26, 'shop_id' => 1, 'category_id' => 8, 'name' => '壓克力磚(靈夢)', 'image' => 'assets/img/products/chillneko/reimu_acrylic_tiles.webp', 'info' => '(10x15)cm', 'price' => 200, 'is_open' => true, 'sort' => 6, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
            ['id' => 27, 'shop_id' => 1, 'category_id' => 8, 'name' => '壓克力磚(魔理沙)', 'image' => 'assets/img/products/chillneko/marisa_acrylic_tiles.webp', 'info' => '(10x15)cm', 'price' => 200, 'is_open' => true, 'sort' => 7, 'created_at' => '2026-05-06 10:04:09', 'updated_at' => '2026-05-06 10:04:09'],
        ];

        DB::table('products')->insert($rows);
    }
}
