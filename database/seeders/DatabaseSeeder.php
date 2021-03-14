<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resellers')->insert([
            [
                'name' => "Ivan",
                'number' => "10"
            ],
            [
                'name' => "Dejan",
                'number' => "11"
            ],
        ]);
    }
}
