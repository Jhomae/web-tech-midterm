<?php

namespace Database\Factories;

use App\Models\RiceInfoInPhil;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiceInfoInPhilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RiceInfoInPhil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_of_the_rice' => $this->faker->word,
        'variety' => $this->faker->word,
        'price' => $this->faker->word,
        'most_planted_region' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
