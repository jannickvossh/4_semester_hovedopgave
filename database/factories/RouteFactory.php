<?php

namespace Database\Factories;

use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => 'url/to/path',
            'route_group'   => null,
            'user_gender'   => 'Male',
            'user_type'     => 'Administration',
            'user_email'    => 'trovin@example.com'
        ];
    }
}
