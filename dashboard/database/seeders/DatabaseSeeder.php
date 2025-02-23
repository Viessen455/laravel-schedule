<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\scheduleMaintenance;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        scheduleMaintenance::create([
            'type' => 'Vehicle Maintenance',
            'mt_date' => '2025-02-22 18:22:03',
            'status' => 'Scheduled',
            'description' => 'Scheduled Maintenance',
            'created_by' => 'Test User',
        ]);

        scheduleMaintenance::create([
            'type' => 'Vehicle Maintenance',
            'mt_date' => '2025-01-22 18:22:03',
            'status' => 'Scheduled 2',
            'description' => 'Scheduled Maintenance 2',
            'created_by' => 'Test User 2',
        ]);
    }
}
