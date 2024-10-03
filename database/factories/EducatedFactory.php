<?php

namespace Database\Factories;

use App\Models\Educated;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducatedFactory extends Factory
{
    protected $model = Educated::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name, // Generate a random name
            'description' => $this->faker->sentence(10), // Generate a random sentence for the description
            // Add any other fields you may have in the Educated model
        ];
    }
}
