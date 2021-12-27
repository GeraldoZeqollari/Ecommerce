<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(1);
        $comments = Comment::get();
        
        return view('layouts.blog')->with(compact('blogs', 'comments'));
    }

    // public function store(Request $request)
    // {
    // }
}
