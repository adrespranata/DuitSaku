<?php

namespace Database\Seeders;

use App\Models\MstDistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstDistrict::create([
            'regency_id' => 1,
            'name' => 'Seluma'
        ]);
    }
}
