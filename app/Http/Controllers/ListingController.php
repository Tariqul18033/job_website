<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Listing.index',
        [
        "listings" => Listing::latest()->filter(request(['tag', 'search']))->get()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Listing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
    
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $listing = Listing::find($request->id);
        return view('Listing.show',
        
        
        ["listing" => $listing]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
