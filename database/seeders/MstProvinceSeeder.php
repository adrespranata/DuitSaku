<?php

namespace Database\Seeders;

use App\Models\MstProvince;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstProvince::create([
            'country_id' => 1,
            'name' => 'Bengkulu',
        ]);
    }
}
