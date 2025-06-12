<?php

namespace Database\Factories;

use App\Models\LeadStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeadStatus>
 */
class LeadStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = LeadStatus::class;

    public function definition(): array
    {
        $status = $this->faker->randomElement([
            ['name' => 'New', 'is_closed' => false],
            ['name' => 'Contacted', 'is_closed' => false],
            ['name' => 'Qualified', 'is_closed' => false],
            ['name' => 'Lost', 'is_closed' => true],
            ['name' => 'Converted', 'is_closed' => true],
        ]);

        return $status;
    }
}
