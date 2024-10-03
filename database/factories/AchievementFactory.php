<?php

namespace Database\Factories;

use App\Models\Achievement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    protected $model = Achievement::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a random sentence for the name
            'description' => $this->faker->paragraph, // Generate a random paragraph for the description
            // Add any other fields you may have in the Achievement model
        ];
    }
}
//{
   // "access_token": "3|BWNo5VGNljtEEj9uyM4aCPSNoLSnYLfeToNeR1Fe700b98f9",
   // "token_type": "Bearer"
//}
