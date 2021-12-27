<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    public function index()
    {
        return view('layouts.createblog');
    }

    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'title' => 'required',
        //    'description' => 'required',
        // ]);

        Blog::create([
            'path_name' => $request->file->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);

        $request->file->store('images', 'public');

        return redirect()->route('home');
    }
}
