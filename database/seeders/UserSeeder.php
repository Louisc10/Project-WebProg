<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([[
            'username' => 'Camellia',
            'email' => 'camellia@blooms.com',
            'password' => 'camellia123',
            'role' => 'admin',
        ],[
            'username' => 'DongBaek',
            'email' => 'dongbaek@blooms.com',
            'password' => 'dongbaek123',
            'role' => 'member',
        ],
        ]);
    }
}
