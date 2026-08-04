<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name'    => 'Jannick',
            'last_name'     => 'Haunstrup',
            'email'         => 'jvha68786@edu.ucl.dk',
            'password'      => Hash::make('#Pertineo123')
        ]);

        Route::factory()->create([
            'url' => 'datareports/population/dashboard',
            'route_group'   => null,
            'user_gender'   => 'Male',
            'user_type'     => 'Administration',
            'user_email'    => 'trovin@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/population/ladida',
            'route_group'   => null,
            'user_gender'   => 'Female',
            'user_type'     => 'HR',
            'user_email'    => 'marjoh@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/population/ladida',
            'route_group'   => null,
            'user_gender'   => 'Female',
            'user_type'     => 'HR',
            'user_email'    => 'marjoh@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/leave/dashboard',
            'route_group'   => null,
            'user_gender'   => 'Male',
            'user_type'     => 'HR',
            'user_email'    => 'nieras@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/leave/lodido',
            'route_group'   => null,
            'user_gender'   => 'Male',
            'user_type'     => 'HR',
            'user_email'    => 'nieras@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/population/dubidu',
            'route_group'   => null,
            'user_gender'   => 'Male',
            'user_type'     => 'Administration',
            'user_email'    => 'trovin@example.com'
        ]);

        Route::factory()->create([
            'url' => 'datareports/applications/dashboard',
            'route_group'   => null,
            'user_gender'   => 'Female',
            'user_type'     => 'Teacher',
            'user_email'    => 'susmar@example.com'
        ]);
    }
}
