<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            // 'text' => Str::random(10),

            [
                'text' => 'aaa',
                'created_at' => Now(),
            ],
            [
                'text' => 'bbb',
                'created_at' => Now(),
            ]
        ]);
    }
}
