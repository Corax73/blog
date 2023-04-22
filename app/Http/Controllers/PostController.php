<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('layouts.postsection', [
            
        ]);
    }

    public function addPost()
    {

        return view('layouts.addpost');

    }

    public function createPost(Request $request)
    {

        $validatedData = $request -> validate( [
            'author' => 'required|min:3',
            'header' => 'required|min:10',
            'description' => 'required|min:100'
        ]);

        $post = new Post($validatedData);
        $post -> saveOrFail();        

    }
}
