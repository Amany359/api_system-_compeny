<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run()
    {
        // Create 50 achievements using the factory
        Achievement::factory()->count(50)->create();
    }
}
