<?php

namespace Database\Factories;

use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;

class OptionFactory extends Factory
{
    protected $model = Option::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word, // Generate a random word for the title
            // Add any other fields you may have in the Option model
        ];
    }
}
