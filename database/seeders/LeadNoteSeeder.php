<?php

namespace Database\Seeders;

use App\Models\LeadNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeadNote::factory()->count(40)->create();
    }
}
