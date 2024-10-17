<?php

namespace Database\Seeders;

use App\Models\MstCountry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstCountry::create([
            'code' => 'ID',
            'name' => 'Indonesia'
        ]);
    }
}
