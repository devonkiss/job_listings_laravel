<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
  // Get and Show All Listings
  public function index() {
    return view('listings.index', [
      'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
    ]);
  }

  // Get and Show Individual Listing
  public function show(Listing $listing) {
    return view('listings.show', [
      'listing' => $listing
    ]);
  }

  // Create an Individual Listing
  public function create() {
    return view('listings.create');
  }
}
