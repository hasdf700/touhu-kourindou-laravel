<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['id' => 1, 'name' => '毛毛工坊', 'url' => 'https://www.facebook.com/profile.php?id=100076110607298', 'admin_account' => 'hasdf700@gmail.com', 'admin_password' => '$2y$10$sLQJJbFKEuJCYuvJ95k.OOudqrVjqeq4xa18k2LlLOLbG/O7iaMQS', 'email' => 'hasdf700@gmail.com', 'phone' => '0956850611', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('shops')->insert($rows);
    }
}
