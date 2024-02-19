<?php

namespace App\Http\Controllers;

use App\Models\Listing;


// Common Resource Routes - Name conventions
// index - show all
// show - show single
// create - show form to create new
// store - save new
// edit - update single
// destroy - delete single

class ListingController extends Controller
{
    public function index()
    {
        // dd(request('tag'));
        return view('pages.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }
    public function show($id)
    {
        $listing = Listing::find($id);
        if ($listing) {
            return view('pages.show', [
                'listing' => $listing
            ]);
        } else {
            return view('pages.404');
        }
    }
}
