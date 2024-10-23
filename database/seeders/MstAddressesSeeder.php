<?php

namespace Database\Seeders;

use App\Models\MstAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstAddress::create([
            'user_id' => 1, // ID pengguna yang ada di mst_users
            'country_id' => 1, // Sesuaikan dengan ID yang ada di mst_countries
            'province_id' => 1, // Sesuaikan dengan ID yang ada di mst_provinces
            'district_id' => 1, // Sesuaikan dengan ID yang ada di mst_districts
            'regency_id' => 1, // Sesuaikan dengan ID yang ada di mst_regencies
            'postal_code_id' => 1, // Sesuaikan dengan ID yang ada di mst_postal_codes
            'street_address' => 'Jl. Contoh No. 1',
        ]);

        MstAddress::create([
            'user_id' => 1,
            'country_id' => 1,
            'province_id' => 1,
            'district_id' => 1,
            'regency_id' => 1,
            'postal_code_id' => 1,
            'street_address' => 'Jl. Contoh No. 2',
        ]);

        MstAddress::create([
            'user_id' => 2, // Mengaitkan alamat ke pengguna kedua
            'country_id' => 1,
            'province_id' => 1,
            'district_id' => 1,
            'regency_id' => 1,
            'postal_code_id' => 1,
            'street_address' => 'Jl. Contoh No. 3',
        ]);
    }
}
