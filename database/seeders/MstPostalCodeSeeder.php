<?php

namespace Database\Seeders;

use App\Models\MstPostalCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstPostalCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstPostalCode::create([
            'district_id' => 1,
            'code' => '38876',
        ]);
    }
}
