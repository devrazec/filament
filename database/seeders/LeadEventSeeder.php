<?php

namespace Database\Seeders;

use App\Models\LeadEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeadEvent::factory()->count(3)->create();
    }
}