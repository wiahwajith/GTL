<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\FormLastRun;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormLastRunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormLastRun::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        $status = ['Heavy','Soft','Good'];
        return [
            'total_run'=> rand(1,20),
            'win_run'=> rand(1,10),
            'demo_rate'=> rand(100, 200) / 10,
            'race_code'=> rand(1000 , 9000),
            'lead'=> $this->faker->name(),
            'race_date'=> Carbon::now()->subDays(rand(1,10))->format('Y-m-d H:i:s'),
            'race_place'=> $this->faker->name(),
            'bit_price'=> rand(0,35) * 10000,
            'race_status'=> $status[rand(0,2)],
            'possible_bit'=> rand(1, 10) / 10,
            'currency'=> 'USD',
        ];
    }
}
