<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('classes')->insert([
                'class_name' => 'Lop '. $i,
                'course_id' => $i,
                'status' => 1,
            ]);
        }
    }
}
