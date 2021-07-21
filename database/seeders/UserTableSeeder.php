<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();

        // Creating first user by hand.
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@asd.com",
            'role' => "admin",
            'password' => Hash::make('123456')
        ]);
    }
}
