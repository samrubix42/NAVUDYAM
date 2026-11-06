<?php

namespace Database\Factories;

use App\Models\JoinRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JoinRequest>
 */
class JoinRequestFactory extends Factory
{
    protected $model = JoinRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->optional()->name(),
            'email' => fake()->optional()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'participation_type' => fake()->randomElement(['student', 'mentor', 'entrepreneur', 'volunteer', 'partner', 'general']),
            'city' => fake()->optional()->city(),
            'affiliation' => fake()->randomElement(['none', 'alumnus', 'student', 'supporter']),
            'affiliation_detail' => fake()->optional()->words(2, true),
            'message' => fake()->optional()->sentence(),
            'is_read' => false,
        ];
    }
}
