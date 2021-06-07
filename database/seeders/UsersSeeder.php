<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => "Name ". $i,
                'type_id' => random_int(1, 3),
                'group_id' => random_int(1, 10),
                'email' => "lav_email_".random_int(1, 1000),
                'password' => "password".random_int(1, 1000),
                // 'phone' => "0123".random_int(1, 10),
                'status' => 1,
            ]);
        }
    }
}
