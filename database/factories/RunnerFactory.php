<?php

namespace Database\Factories;

use App\Models\Runner;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Runner::class;

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
