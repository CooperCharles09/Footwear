<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['Country' => "India"],
            ['Country' => "America"],
            ['Country' => "Englend"],
            ['Country' => "NewzeLand"],
            ['Country' => "Irelend"],
            ['Country' => "Omabia"],
            ['Country' => "Japan"],
            ['Country' => "Chin"],
            ['Country' => "Pakistan"],
            ['Country' => "Alaska"],
            ['Country' => "Korea"],
            ['Country' => "Philippines"]
        ]);
    }
}
