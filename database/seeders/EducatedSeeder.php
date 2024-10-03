<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Educated;

class EducatedSeeder extends Seeder
{
    public function run()
    {
        // Create 50 educated records using the factory
        Educated::factory()->count(50)->create();
    }
}
