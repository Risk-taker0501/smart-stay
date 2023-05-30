<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class WatchFactory extends Factory
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
            'app_name' => $this->faker->realText($maxNbChars = 50),
            'app_package' => $this->faker->text(),
            'app_icon' => $this->faker->imageUrl(640, 480),
            'default_activity' => $this->faker->unique()->sentence(),
            'order' => $this->faker->text()
        ];
    }
}
