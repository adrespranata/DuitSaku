<?php

namespace Database\Seeders;

use App\Models\MstGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstGroup::create([
            'id'            => 0,
            'name'          => 'Unassigned',
            'description'   => 'Unassigned'
        ]);
        MstGroup::create([
            'id'            => 1,
            'name'          => 'Administrator',
            'description'   => 'Administrator'
        ]);
        MstGroup::create([
            'id'            => 2,
            'name'          => 'Reguler User',
            'description'   => 'Regular User'
        ]);
    }
}
