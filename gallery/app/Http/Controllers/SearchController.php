<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
     public function search(Request $request)
    {
        $query = $request->input('query');

        $gallerys = Gallery::where('title', 'LIKE', "%$query%")
                       ->orWhere('uploader', 'LIKE', "%$query%")
                       ->get();

        return view('search', compact('images'));
    }
}
