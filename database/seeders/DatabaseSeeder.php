<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            // HERO
            HeroSeeder::class,

            // HOME PAGE SECTIONS
            HomePageSectionSeeder::class,

            // SERVICES
            ServiceSeeder::class,

            // PROJECTS
            ProjectSeeder::class,

            // SOLUTIONS
            SolutionPageSeeder::class,

        ]);
    }
}