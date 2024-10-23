<?php

namespace Database\Seeders;

use App\Models\MstUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstUser::create([
            'email' => 'user1@example.com',
            'username' => 'user1',
            'password' => bcrypt('password123'),
            'id_group' => '1',
            'is_active' => true,
        ]);

        MstUser::create([
            'email' => 'user2@example.com',
            'username' => 'user2',
            'password' => bcrypt('password123'),
            'id_group' => '2',
            'is_active' => true,
        ]);
    }
}
