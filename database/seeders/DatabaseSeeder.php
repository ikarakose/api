<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ApiSeeder;
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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>'admin',
            'level'=>10
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@admin.com',
            'level'=>1
        ]);

        $this->call([
            ApiSeeder::class
        ]);
    }
}
