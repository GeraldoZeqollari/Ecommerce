<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'comment' => 'required',
        // ]);

        $blog = Blog::find($request->only('id'))->first();

        if (Comment::where('user_id', auth()->user()->id)
            ->where('blog_id', $blog->id)->exists()) 
            {

            Comment::where('user_id', auth()->user()->id)
                ->where('blog_id', $blog->id)->update([
                    'comment' => $request->comment,
                ]);
        } 
        else {

            Comment::create([

                'comment' => $request->comment,
                'user_id' => auth()->user()->id,
                'blog_id' => $blog->id
            ]);
        }

        return back();
    }
}
