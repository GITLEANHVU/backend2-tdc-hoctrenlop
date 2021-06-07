<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i <= 7; $i++) {
            DB::table('weeks')->insert([
                'week_weekdays' => $i,
                'status_check' => 1,
                'diary_id' => random_int(1, 7),
                'status' => 1,
                'create_at' => Carbon::now(),
                'end_at' => Carbon::now(),

            ]);
        }
    }
}
