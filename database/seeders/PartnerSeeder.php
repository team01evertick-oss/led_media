<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;
use App\Models\Solution;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        Partner::truncate();

        $data = [
            'outdoor-billboards' => 'Ready to install your outdoor LED billboard project?;Looking for a reliable outdoor LED billboard partner?',
            
            'indoor-commercial' => 'Upgrade your commercial space with professional LED display solutions.;Enhance your commercial property with professional LED display solutions.',
            
            'fine-pixel' => 'Create a modern and impactful meeting environment with fine pixel LED technology.',
            
            'meeting-room' => 'Transform your meeting room with modern LED display solutions.',
            
            'retail' => 'Simplify your LED operations with professional integration solutions.;Transform your retail environment with modern LED display solutions.;Upgrade your retail experience with modern LED display technology.;Enhance your commercial property with professional LED display solutions.',
            
            'control-systems' => 'Partner with LED Media for professional installation and reliable project execution.;Build a smarter and more professional communication environment.;Build reliable and professional communication systems with LED Media.;Partner with LED Media for reliable LED display solutions and professional project execution.',
            
            'installation' => 'Partner with LED Media for professional installation and reliable project execution.;Looking for expert guidance for your LED display project?',
            
            'banks' => 'Partner with LED Media for reliable banking display solutions.',
            
            'hospitality' => 'Enhance guest experiences with premium LED display solutions.',
        ];

        foreach ($data as $slug => $titlesString) {

            $solution = Solution::where('slug', $slug)->first();

            if (!$solution) {
                $this->command->warn("Solution not found: {$slug}");
                continue;
            }

            $titles = explode(';', $titlesString);

            foreach ($titles as $title) {
                Partner::create([
                    'solution_id' => $solution->id,
                    'title'       => trim($title),
                    'status'      => true,
                ]);
            }

            $this->command->info("Seeded partners for: {$slug}");
        }

        $this->command->info("Partner seeding completed successfully.");
    }
}