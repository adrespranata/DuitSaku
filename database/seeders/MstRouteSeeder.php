<?php

namespace Database\Seeders;

use App\Models\MstRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstRoute::create([
            'uri' => '/',
            'name' => 'login',
            'method' => 'GET',
            'middleware' => 'guest',
            'component' => 'Auth/Login'
        ]);
    }
}
