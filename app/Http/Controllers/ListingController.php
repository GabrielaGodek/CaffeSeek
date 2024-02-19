<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;


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
        return view('pages.index', [
            'listings' => Listing::all()
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
