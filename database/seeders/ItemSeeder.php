<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'name' => 'Hair Cut',
            'memo' => 'Cut your hair', 
            'price' => 6000,
            ],
            [
            'name' => 'Hair Color',
            'memo' => 'Color your hair', 
            'price' => 10000,
            ],
            [
            'name' => 'Nail Cut',
            'memo' => 'Cut your nails', 
            'price' => 5000,
            ],
            [
            'name' => 'Nail Color',
            'memo' => 'Color your nails', 
            'price' => 6000,
            ],
        ]);
    }
}
