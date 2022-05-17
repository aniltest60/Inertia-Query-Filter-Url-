<?php

namespace Database\Factories;

use App\Models\Third;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fourth>
 */
class FourthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name,
            'third_id' => Third::factory()
            //
        ];
    }
}