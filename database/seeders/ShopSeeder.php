<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => '高級食パン屋', 'area_id' => 1],
            ['name' => '高級食クロワッサン屋', 'area_id' => 2],
            ['name' => '高級食コッペパン屋', 'area_id' => 1],
            ['name' => '高級食メロンパン屋', 'area_id' => 3],
        ]);
    }
}
