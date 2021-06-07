<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =  ["Teacher", "Trainer", "Student"];
        for ($i = 0; $i < 2; $i++) {
            DB::table('type')->insert([
                'type_name' => $items[$i],
                'status' => 1,
            ]);
        }
    }
}
