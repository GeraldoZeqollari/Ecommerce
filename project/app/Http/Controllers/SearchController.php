<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = $request->input('search');
        if ($search != "") {

            $images = Image::query()
                ->where('title', 'LIKE', "%$search%")
                // ->orWhere('image_description', 'LIKE', "%$search%")
                ->get();


            $blogs = Blog::query()
                ->where('description', 'LIKE', "%$search%")
                ->get();
        } else {
            $images = [];
            $blogs = [];
        }

        return view('layouts.search')->with('images', $images)->with('search', $search)->with('blogs', $blogs);
    }
}
