<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asset::create([
            'name' => 'Mouse',
            'status' => 'good',
        ]);
        Asset::create([
            'name' => 'Keyboard',
            'status' => 'on work',
        ]);
        Asset::create([
            'name' => 'Monitor',
            'status' => 'good condition',
        ]);
        Asset::create([
            'name' => 'CPU',
            'status' => 'not so good',
        ]);
        Asset::create([
            'name' => 'Water bottle',
            'status' => 'pure',
        ]);
        Asset::create([
            'name' => 'Tissue paper',
            'status' => 'good',
        ]);
        Asset::create([
            'name' => 'table fan',
            'status' => 'working',
        ]);
    }
}
