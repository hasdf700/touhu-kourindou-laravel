<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 先建立「被參照」的表(沒有外鍵依賴的表)
        $this->call([
            CategorySeeder::class,
            ShopSeeder::class,
            GameSeeder::class,
            CitySeeder::class,
        ]);

        // 再建立「依賴上面那些表」的表
        $this->call([
            CharacterSeeder::class,  // 依賴 games
            TownSeeder::class,       // 依賴 cities
            ProductSeeder::class,    // 依賴 shops, categories
        ]);

        // 最後建立「依賴 products」的表
        $this->call([
            ProductImageSeeder::class,
        ]);
    }
}
