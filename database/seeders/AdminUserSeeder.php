<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Seed the admin user.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@wecodely.com',
            ],
            [
                'name' => 'Admin',
                'password' => Hash::make('japan@2050'),
            ]
        );
    }
}
