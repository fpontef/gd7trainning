<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\Movie::class, 4)->create();

        DB::table('movies')->insert([
            [
                'title'=>'Test Title',
            ]
        ]);
    }
}
