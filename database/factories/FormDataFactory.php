<?php

namespace Database\Factories;

use App\Models\FormData;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = ['M','F'];
        $colour = ['B','W','R','G','Y'];
        return [
            'runner_name'=> $this->faker->name(),
            'age'       => rand(20, 80),
            'sex'       => $sex[ rand(0, 1)],
            'colour'    => $colour[ rand(0, 4)],
        ];
    }
}
