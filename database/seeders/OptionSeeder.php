<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    public function run()
    {
        // Create 50 options using the factory
        Option::factory()->count(50)->create();
    }
}
