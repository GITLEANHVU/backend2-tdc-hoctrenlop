<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class company_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 1000000; $i++) {
            DB::table('company_category')->insert([
                'company_id' => $i,
                'category_id' => random_int(1, 4),
                'status' => 1,
            ]);
        }
    }
}
