<?php

namespace App\Http\Controllers;

use App\Http\Resources\ListingResource;
use App\Models\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Listing/Index', [
            'listings' => ListingResource::collection(
                $request->user()->listings()->paginate(100)
            ),
        ]);
    }

    public function show(Listing $listing)
    {
        return Inertia::render('Listing/Show', [
            'listing' => ListingResource::make($listing),
        ]);
    }
}
