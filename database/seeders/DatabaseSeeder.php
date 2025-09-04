<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        $this->call([
        TaskSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test@example.com',
            'password' => 'testing12345',
        ]);


        User::factory()->create([
            'name' => 'Test User 2 ',
            'email' => 'test2@example.com',
            'password' => 'testing12345',
        ]);


        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'admin12345',
        ]);
    }
}
