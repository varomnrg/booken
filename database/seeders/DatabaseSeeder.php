<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // Create or retrieve the admin user
        // $admin = User::firstOrCreate(
        //     ['email' => 'admin@example.com'],
        //     [
        //         'name' => 'Admin',
        //         'password' => Hash::make('password'),
        //         'role' => 'admin',
        //         'email_verified_at' => now(),
        //         'remember_token' => Str::random(10),
        //     ]
        // );

        Book::factory(15)->create();
    }
}
