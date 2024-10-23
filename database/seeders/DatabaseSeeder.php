<?php

namespace Database\Seeders;

use App\Models\MstUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MstRouteSeeder::class,
            MstCountrySeeder::class,
            MstProvinceSeeder::class,
            MstRegencySeeder::class,
            MstDistrictSeeder::class,
            MstPostalCodeSeeder::class,
            MstGroupSeeder::class,
            MstUsersSeeder::class,
            MstAddressesSeeder::class,
            MstUserDetailsSeeder::class,
        ]);
    }
}
