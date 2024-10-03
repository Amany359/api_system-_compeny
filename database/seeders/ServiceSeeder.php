<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Create 50 service records using the factory
        Service::factory()->count(50)->create();
    }
}
