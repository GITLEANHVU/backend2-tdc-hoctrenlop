<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrouppermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('group_permissions')->insert([
                'group_name' => "GroupName permission ". $i,
                'status' => 1,
            ]);
        }
    }
}
