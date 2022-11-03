<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'owner_id' => User::factory(),
            'address_id' => Address::factory(),
            'active' => (bool) random_int(0, 1),
            'image' => $this->faker->imageUrl(640, 480),
            'description' => $this->faker->paragraph(),
            'price' => random_int(100000, 90000000000),
            'status' => $this->faker->randomElement(Listing::STAUSES),
        ];
    }
}
