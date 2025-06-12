<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leads>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Lead::class;

    public function definition(): array
    {
        return [
            'full_name'    => $this->faker->name,
            'email'        => $this->faker->unique()->safeEmail,
            'phone'        => $this->faker->phoneNumber,
            'company'      => $this->faker->company,
            'source_id'    => LeadSource::inRandomOrder()->first()?->id ?? LeadSource::factory(),
            'status_id'    => LeadStatus::inRandomOrder()->first()?->id ?? LeadStatus::factory(),
            'user_id'      => User::inRandomOrder()->first()?->id ?? User::factory(),
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }
}
