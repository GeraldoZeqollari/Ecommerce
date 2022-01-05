<?php

namespace App\Http\Controllers;

use App\Models\Sort;
use App\Models\Image;
use Illuminate\Http\Request;

class ShopgridController extends Controller
{
    public function index()
    {
        return view('layouts.shopgrid');
    }

    public function shoplist()
    {
        return view('layouts.shoplist');
    }
    public function contact()
    {
        return view('layouts.contact');
    }
    public function about()
    {
        return view('layouts.about');
    }
    public function order()
    {
        return view('layouts.order');
    }
}
