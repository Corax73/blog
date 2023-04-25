<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     * @return view
     */
    public function index()
    {

        $posts = Post::with('comments') -> get() -> sortByDesc('updated_at');
        
        return view('layouts.postsection', [
            'posts' => $posts
        ]);

    }

    /**
     * Show the form for creating a new post.
     * @return view
     */
    public function addPost()
    {

        return view('layouts.addpost');

    }

    /**
     * Store a newly created post in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return redirect
     */
    public function createPost(Request $request)
    {

        $validatedData = $request -> validate( [
            'author' => 'required|min:3',
            'header' => 'required|min:10',
            'description' => 'required|min:100'
        ]);

        $post = new Post($validatedData);
        $post -> saveOrFail();

        return redirect() -> route('showPost', ['id' => $post -> id]);
        
    }

    /**
     * Display the specified post.
     * @param int $id
     */
    public function showPost(int $id)
    {

        $post = Post::find($id);
        $comments = $post -> comments -> sortByDesc('created_at');

        return view('layouts.post',
        [
            'post' => $post,
            'comments' => $comments
        ]);    

    }
}
