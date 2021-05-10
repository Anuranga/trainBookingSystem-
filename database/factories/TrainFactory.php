<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class TrainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Train::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'start_station' => $this->faker->city,
            'end_station' => $this->faker->city,
            'seats' => '10',
            'departure_date_time' => $this->faker->dateTime,
        ];
    }
}
