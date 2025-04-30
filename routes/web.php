<?php

use App\Models\Job;
use App\Models\Listing;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
Route::get('/', [ListingController::class, 'index'])->name('home');



Route::get('/listings/create', [ListingController::class, 'create']);

//store

Route::post('/listings', [ListingController::class, 'store']);


Route::get('/listings/{id}', [ListingController::class, 'show']);
//create

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
Route::put('/listings/{listing}', [ListingController::class, 'update']);//->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);
// Create New User
Route::post('/users', [UserController::class, 'store']);
// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);