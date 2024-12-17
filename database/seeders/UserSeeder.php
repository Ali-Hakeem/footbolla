<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Anggita',
            'email' => 'anggita@menikahyuk.com',
            'password' => \bcrypt('Anggita1006')
        ];

        User::insert($user);
    }
}
