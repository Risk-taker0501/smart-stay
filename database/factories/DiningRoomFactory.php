<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DiningRoom>
 */
class DiningRoomFactory extends Factory
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
            'dining_name' => $this->faker->word(),
            'dining_img' => $this->faker->imageUrl(640, 480),
            'detail_imgs' => $this->faker->text(),
            'dining_package' => $this->faker->text(),
            'dining_rate' => $this->faker->randomDigit(),
            'default_activity' => $this->faker->sentence(),
            'order' => $this->faker->text()
        ];
    }
}
