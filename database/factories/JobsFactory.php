<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {



        return [
            'user_id' => User::find(1),
            'job_title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'status' => 'applied',
            'contact_name' => fake()->name(),
            'contact_phone_number' => fake()->phoneNumber(),
            'created_at' => $this->faker->dateTimeBetween('-180 days'),


        ];
    }
}
