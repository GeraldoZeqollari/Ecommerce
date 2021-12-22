<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('layouts.upload');
    }

    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'title' => 'required',
        //     'stock' => 'required',
        //     'price' => 'required',
        //     'reduced_price' => 'required',

        // ]);

        Image::create([

            'path_name' => $request->file->hashName(),
            'title' => $request->title,
            'price' => $request->price,
            'reduced_price' => $request->reduced_price,
            // 'category_id' => $request->category_id,
            // 'stock' => $request->stock,


        ]);
        $request->file->store('images', 'public');
        return back();
    }
}
