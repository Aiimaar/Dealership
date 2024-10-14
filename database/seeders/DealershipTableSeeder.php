<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class DealershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dealership')->insert([
            ['brand' => 'Nissan', 'model' => 'Skyline GTR R34', 'hp' => '280cv', 'price' => '28000$'],
            ['brand' => 'Toyota', 'model' => 'Supra MK4', 'hp' => '320cv', 'price' => '32000$']
        ]);
    }
}
