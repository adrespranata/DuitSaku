<?php

namespace Database\Seeders;

use App\Models\MstUserD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstUserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstUserD::create([
            'user_id' => 1,
            'first_name' => 'John',
            'middle_name' => 'A.',
            'last_name' => 'Doe',
            'gender' => 'M',
            'birth_date' => '1990-01-01',
            'phone' => '1234567890',
        ]);
    }
}
