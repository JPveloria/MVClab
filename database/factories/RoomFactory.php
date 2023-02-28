<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\room>
 */
class roomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomID'=>fake()->roomid(),
            'roomDescription'=>fake()->roomdescription(),
            'roomCapacity'=>fake()->roomcapacity(),
            'dateFrom'=>fake()->datefrom(),
            'dateTo'=>fake()->dateto(),
        ];
    }
}
