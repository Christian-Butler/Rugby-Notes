<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teams>
 */
class TeamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'teams_name' =>$this->faker->namespace,
            'league' => $this->faker->namespace,
            'number_of_players'=> $this->faker->integer
        
        ];
    }
}
