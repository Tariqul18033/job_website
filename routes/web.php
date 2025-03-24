<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Listing;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ListingController;
Route::get('/', [ListingController::class, 'index'])->name('home');



Route::get('/listings/create', [ListingController::class, 'create']);

//store

Route::post('/listings', [ListingController::class, 'store']);


Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listing.show');
//create
