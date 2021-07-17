<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        // \App\Models\Movie::factory(4)->create();
        // \App\Models\User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@asd.com',
        //     'password' => bcrypt( '123456' ),
        //     'role' => 'admin'
        // ]);
    }
}
