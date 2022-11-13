<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage
Route::get('/', function () {
    return view('homepage', [
        'heading' => 'Welcome to Listing Services'
    ]);
});

// All Listings Endpoint
Route::get('/listings/all', function() {
    return view('all_listings', [
        'heading' => 'All Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'heading' => 'Single Listing',
        'listing' => Listing::find($id)
    ]);
});

// Contact Us Page
Route::get('/contact-us', function() {
    return view('contact', [
        'heading' => 'Contact Us'
    ]);
});