<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('course')->insert([
                'course_name' => 'Course '. $i,
                'semester_name' => $i % 2 == 0 ? "HK 1" : "HK 2",
                'course_year' => $i % 2 == 0 ? "Nam 1" : "Nam 2",
                'status' => 1,
            ]);
        }
    }
}
