<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarycontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i < 10; $i++) {
            DB::table('diarycontent')->insert([
                'diarycontent_weekday' => 'Course ' . $i,
                'diarycontent_work' => "cong viec ". $i,
                'diarycontent_content' => "Lam viec nay ne chia cho ". $i,
                'diarycontent_note' => $i % 2 == 0 ? "Kha tot" : "Khong tot",
                'diarycontent_teacher_comment' => $i + 1 % 2 == 0 ? "Kha tot" : "Khong tot",
                'diarycontent_trainer_comment' => $i % 2 == 0 ? "Khong tot" : "Kha tot",
                'week_id' => random_int(1, 4),
                'status' => 1,
            ]);
        }
    }
}
