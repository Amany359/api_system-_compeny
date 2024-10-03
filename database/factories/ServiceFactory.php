<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Generate a random word for the service name
            'description' => $this->faker->sentence(10), // Generate a random sentence for the description
            // Add any other fields you may have in the Service model
        ];
    }
}
