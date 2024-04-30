<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Fariz Admin',
            'email' => 'fariz@example.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'Lauwba',
            'email' => 'lauwba@example.com',
            'address' => 'Jl.Taman Sari, Sleman,DIY',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class
        ]);
    }
}
