<?php

namespace Database\Factories;

use App\Models\LeadSource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeadSource>
 */
class LeadSourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = LeadSource::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Website', 'Google Ads', 'Referral', 'Email', 'Social Media', 'Cold Call', 'Event'
            ]),
            'description' => $this->faker->sentence,
        ];
    }
}
