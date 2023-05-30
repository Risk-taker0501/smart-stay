<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeatherForecast>
 */
class WeatherForecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'day' => $this->faker->word(),
            'temperature' => $this->faker->numberBetween(-50, 50),
            'weather' => $this->faker->word()
        ];
    }
}
