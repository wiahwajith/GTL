<?php

namespace Database\Factories;

use App\Models\Race;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Race::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'external_id'=> Str::random(10),
            'name'       => $this->faker->name()
        ];
    }
}
