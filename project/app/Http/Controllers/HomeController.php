<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = Image::get();
        return view('home')->with(compact('images'));
    }
}
