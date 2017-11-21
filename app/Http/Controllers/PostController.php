<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

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

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        
        //Legacy Code for consult.
        // $posts = Post::latest();

        // if($month = request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if($year = request('year')){
        //     $posts->whereYear('created_at', $year);
        // }

        // $posts = $posts->get();

        //TODO : Externalize
        $archives = Post::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        return View('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post){
        return View('posts.show', compact('post'));
    }
}
