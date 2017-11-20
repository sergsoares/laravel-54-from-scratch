<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function create() 
    {
        return View('posts.create');
    }

    public function store() 
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );        

        return redirect()->home();
    }

    public function index(){

        $posts = Post::all();
        return View('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return View('posts.show', compact('post'));
    }
}
