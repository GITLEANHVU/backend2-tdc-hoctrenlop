<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('diary')->insert([
                'diary_name' => 'Diary ' . $i,
                'user_id' => random_int(1, 10),
                'status' => 1,
            ]);
        }
    }
}
