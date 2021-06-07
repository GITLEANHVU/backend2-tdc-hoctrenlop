<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Group_permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('group_permission')->insert([
                'permission_id' => $i,
                'group_id' => $i,
                'status' => 1,
            ]);
        }
    }
}
