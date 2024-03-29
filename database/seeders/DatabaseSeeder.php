<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create(['name' => 'Tony Stark', 'email' => 'tony@starkindustries.com']);

        Listing::factory()
            ->count(10000)
            ->create([
                'owner_id' => $user->id,
            ]);
    }
}
