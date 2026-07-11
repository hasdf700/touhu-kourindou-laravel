<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'product_id' => 1, 'path' => 'assets/img/products/chillneko/reimu_acrylic01.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'product_id' => 1, 'path' => 'assets/img/products/chillneko/reimu_acrylic02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'product_id' => 2, 'path' => 'assets/img/products/chillneko/yuyuko_acrylic01.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'product_id' => 2, 'path' => 'assets/img/products/chillneko/yuyuko_acrylic02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'product_id' => 20, 'path' => 'assets/img/products/chillneko/koishi_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'product_id' => 3, 'path' => 'assets/img/products/chillneko/reimu_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'product_id' => 4, 'path' => 'assets/img/products/chillneko/marisa_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'product_id' => 5, 'path' => 'assets/img/products/chillneko/sakuya_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'product_id' => 6, 'path' => 'assets/img/products/chillneko/youmu_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'product_id' => 7, 'path' => 'assets/img/products/chillneko/yuyuko_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'product_id' => 8, 'path' => 'assets/img/products/chillneko/yukari_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'product_id' => 9, 'path' => 'assets/img/products/chillneko/remilia_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'product_id' => 10, 'path' => 'assets/img/products/chillneko/flandre_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'product_id' => 11, 'path' => 'assets/img/products/chillneko/patchouli_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'product_id' => 12, 'path' => 'assets/img/products/chillneko/alice_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'product_id' => 13, 'path' => 'assets/img/products/chillneko/cirno_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'product_id' => 14, 'path' => 'assets/img/products/chillneko/reisen_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'product_id' => 15, 'path' => 'assets/img/products/chillneko/reimu_fanfic.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'product_id' => 16, 'path' => 'assets/img/products/chillneko/marisa_fanfic.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'product_id' => 17, 'path' => 'assets/img/products/chillneko/yukuri_sticky.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'product_id' => 18, 'path' => 'assets/img/products/chillneko/store_ChillNeko07.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'product_id' => 19, 'path' => 'assets/img/products/chillneko/koishi_acrylic01.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'product_id' => 21, 'path' => 'assets/img/products/chillneko/satori_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'product_id' => 22, 'path' => 'assets/img/products/chillneko/tenshi_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'product_id' => 23, 'path' => 'assets/img/products/chillneko/aya_key.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'product_id' => 24, 'path' => 'assets/img/products/chillneko/flandre_acrylic_tiles.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'product_id' => 25, 'path' => 'assets/img/products/chillneko/remilia_acrylic_tiles.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'product_id' => 26, 'path' => 'assets/img/products/chillneko/reimu_acrylic_tiles.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'product_id' => 27, 'path' => 'assets/img/products/chillneko/marisa_acrylic_tiles.webp', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'product_id' => 19, 'path' => 'assets/img/products/chillneko/koishi_acrylic02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'product_id' => 20, 'path' => 'assets/img/products/chillneko/koishi_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'product_id' => 3, 'path' => 'assets/img/products/chillneko/reimu_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'product_id' => 4, 'path' => 'assets/img/products/chillneko/marisa_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'product_id' => 5, 'path' => 'assets/img/products/chillneko/sakuya_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'product_id' => 6, 'path' => 'assets/img/products/chillneko/youmu_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'product_id' => 8, 'path' => 'assets/img/products/chillneko/yukari_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'product_id' => 9, 'path' => 'assets/img/products/chillneko/remilia_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'product_id' => 10, 'path' => 'assets/img/products/chillneko/flandre_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'product_id' => 11, 'path' => 'assets/img/products/chillneko/patchouli_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'product_id' => 12, 'path' => 'assets/img/products/chillneko/alice_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'product_id' => 13, 'path' => 'assets/img/products/chillneko/cirno_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'product_id' => 14, 'path' => 'assets/img/products/chillneko/reisen_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'product_id' => 21, 'path' => 'assets/img/products/chillneko/satori_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'product_id' => 22, 'path' => 'assets/img/products/chillneko/tenshi_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'product_id' => 23, 'path' => 'assets/img/products/chillneko/aya_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'product_id' => 15, 'path' => 'assets/img/products/chillneko/reimu_fanfic02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'product_id' => 15, 'path' => 'assets/img/products/chillneko/reimu_fanfic03.webp', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'product_id' => 16, 'path' => 'assets/img/products/chillneko/marisa_fanfic02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'product_id' => 16, 'path' => 'assets/img/products/chillneko/marisa_fanfic03.webp', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'product_id' => 7, 'path' => 'assets/img/products/chillneko/yuyuko_key02.webp', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('product_images')->insert($rows);
    }
}
