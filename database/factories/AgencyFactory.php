<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->numberBetween(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'manager' => $this->faker->name(),
            'status' => $this->faker->name()
        ];
    }
}
