<?php

namespace Database\Seeders;

use App\Models\Api;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Api::create(['name'=>"Bella Maison",'slug'=> Str::slug("Bella Maison")]);
    }
}
