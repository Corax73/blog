<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return redirect
     */
    public function createComment(Request $request)
    {

        $validatedData = $request -> validate( [
            'author' => 'required|min:3',
            'description' => 'required|min:20'
        ]);

        $validatedData['post_id'] = (integer)$request -> id;
        $comment = new Comment($validatedData);
        $comment -> saveOrFail();

        return redirect() -> route('showPost', ['id' => $request -> id]);
        
    }
}
