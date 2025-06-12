<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Lead;
use App\Models\LeadEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeadEvent>
 */
class LeadEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = LeadEvent::class;

    public function definition(): array
    {
        return [
            'lead_id'       => Lead::factory(),
            'user_id'       => User::factory(),
            'event_type' => $this->faker->randomElement(['Call', 'Email', 'Meeting']),
            'details'       => $this->faker->sentence,
            'event_date' => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}