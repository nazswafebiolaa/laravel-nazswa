<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );

        User::where('email', 'hazswafebiii19@gmail.com')
            ->update(['email' => 'hazswafebi19@gmail.com']);

        User::updateOrCreate(
            ['email' => 'hazswafebi19@gmail.com'],
            [
                'name' => 'Nazswa',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );

        User::updateOrCreate(
            ['email' => 'nazswa19@gmail.com'],
            [
                'name' => 'Nazswa',
                'email_verified_at' => now(),
                'password' => Hash::make('nazswa19'),
            ],
        );
    }
}
