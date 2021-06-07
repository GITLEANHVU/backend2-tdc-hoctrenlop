<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_data = ["Mạng máy tính", "Kiểm thử phần mềm", "Phát triển ứng dụng trên web", "Phát triển ứng dụng trên mobile"];
        for ($i = 0; $i < count($categories_data); $i++) {
            DB::table('categories')->insert([
                'category_name' => $categories_data[$i],
                'status' => 1,
            ]);
        }
    }
}
