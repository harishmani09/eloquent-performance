<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Company::factory(1000)->create()->each( fn($company) => $company->users()->firstOrCreate(...User::factory(50)->make()->map->getAttributes()));
        // Company::factory(1000)->has(User::factory(50)->count(50))->create();

    }
}
