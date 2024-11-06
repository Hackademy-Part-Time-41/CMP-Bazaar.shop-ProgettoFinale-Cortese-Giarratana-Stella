<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view ('article.create');
    }

    // public function store(StoreListingRequest $request)
    // {
    //     Listing::create($request->all());

    //     return redirect()->route('article.index')->with('success', 'annuncio inserito!');
    // }


}
