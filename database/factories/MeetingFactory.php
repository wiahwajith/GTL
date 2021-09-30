<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

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
