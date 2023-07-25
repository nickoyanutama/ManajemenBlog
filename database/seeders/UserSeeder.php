<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nicko Yan Utama',
            'username' => 'admin',
            'email' => 'nickoyanutama@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
        // User::factory(3)->create();
    }
}
