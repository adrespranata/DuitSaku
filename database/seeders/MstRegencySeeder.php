<?php

namespace Database\Seeders;

use App\Models\MstRegency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstRegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstRegency::create([
            'province_id' => '1',
            'name' => 'Seluma'
        ]);
    }
}
