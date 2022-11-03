<?php

namespace Tests\Feature;

use App\Models\Listing;
use App\Models\User;
use ClaudioDekker\Inertia\Assert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListingControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        Listing::factory()->count(10)->create();
    }

    public function testUserCanViewListings()
    {
        $response = $this->actingAs($this->user)
            ->get(route('listings'));

        $response->assertInertia(function (Assert $page) {
            $page
                ->component('Listing/Index')
                ->has('listings');
        });
    }

    public function testUserCanViewListing()
    {
        $response = $this->actingAs($this->user)
            ->get(route('listings.show', Listing::first()->id));

        $response->assertInertia(function (Assert $page) {
            $page
                ->component('Listing/Show')
                ->has('listing');
        });
    }
}
