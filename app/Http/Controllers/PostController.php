<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
}
