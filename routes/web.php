<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Listing;

Route::get('/', function () {
    return view('jobListings',
    ["heading" => "Job Listings",
    "listings" => Listing::all()]
    );
});


Route::get('/jobs/{id}', function ($id) {
    $listing = Listing::findOrFail($id);
    return view('jobList',
    
    
    ["listing" => $listing]);

});


